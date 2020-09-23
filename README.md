# Tracking Application Log

## Installation

```
composer require smart-contact/tracking-application-log
```

Go up
```
project_root/app/config.php
```

and add inside 'providers' the package's reference

```
'providers' => [
    ...

    \SmartContact\TrackingApplicationLog\TrackingApplicationLogProvider::class,
    
    ...
```
