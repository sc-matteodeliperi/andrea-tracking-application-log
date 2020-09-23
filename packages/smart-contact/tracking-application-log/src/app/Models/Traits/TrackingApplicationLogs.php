<?php

namespace SmartContact\TrackingApplicationLog\app\Models\Traits;


use Jenssegers\Agent\Agent;
use ReflectionClass;
use SmartContact\TrackingApplicationLog\app\Models\ApplicationLog;

trait TrackingApplicationLogs
{
    /**
     *
     */
    protected static function boot()
    {
        parent::boot();

        foreach(static::getModelEvents() as $event) {
            static::$event(function($model) use($event) {
                $model->registerApplicationLog($event);
            });
        }
    }

    /**
     * @return mixed
     */
    public function applicationLogs()
    {
        return $this->morphMany(ApplicationLog::class, 'subject');
    }

    /**
     * @return mixed
     */
    public function lastApplicationLogs()
    {
        return $this->applicationLogs()->orderBy('created_at', 'desc')->take(10);
    }

    /**
     * Fetch the changes to the model.
     *
     * @return array|null
     */
    public function applicationLogsChanges()
    {
        $original = $this->getOriginal();

        foreach ($original as $key => $value) {
            if(is_array($value) or is_object($value)) {
                $original[$key] = json_encode($value);
            }
        }

        $attributes = $this->getAttributes();

        if ($this->wasChanged()) {
            return [
                'before' => Arr::except(array_diff($original, $attributes), ['created_at','updated_at']),
                'after' => Arr::except($this->getChanges(), ['created_at','updated_at']),
            ];
        }

        return [];
    }

    /**
     * @param $event
     * @throws \ReflectionException
     */
    protected function registerApplicationLog($event)
    {
        $baseInfoUserArray = [
            'level' => 'info',
            'description' => $this->getApplicationLogDescription($this, $event),
            'changes' => $this->applicationLogsChanges(),
            'actor_id' => auth()->user()->id ?? null,
        ];

        $getAgent = $this->getAgent();

        $registerNewLogin = array_merge($baseInfoUserArray, $getAgent);
        $this->applicationLogs()->create($registerNewLogin);
    }

    /**
     * @param $model
     * @param $action
     * @return string
     * @throws \ReflectionException
     */
    protected function getApplicationLogDescription($model, $action)
    {
        $description = strtolower((new ReflectionClass($model))->getShortName());

        return "{$action}_{$description}";
    }

    /**
     * @return string[]
     */
    protected static function getModelEvents()
    {
        if(isset(static::$recordEvents)) {
            return static::$recordEvents;
        }

        return ['created', 'deleted', 'updated'];
    }

    /**
     * @return array
     */
    private function getAgent()
    {
        $device = new Agent();
        $browser = $device->browser();
        $platform = $device->platform();

        return [
            "user_agent" => $device->getUserAgent(),
            "browser" => $browser ?? null,
            "browser_version" => $device->version($browser) ?? null,
            "platform" => $platform ?? null,
            "platform_version" => null,
            "ip" => $this->getClientIpAddress(),
        ];
    }

    /**
     * @return mixed|string
     */
    private function getClientIpAddress()
    {
        return request()->server->get('HTTP_X_FORWARDED_FOR') ?
            explode(',', request()->server->get('HTTP_X_FORWARDED_FOR'))[0] :
            request()->server->get('REMOTE_ADDR');
    }
}
