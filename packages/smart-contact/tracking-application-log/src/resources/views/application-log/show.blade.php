@extends('tracking-application-log::layout.app')

@section('content')
    <div class="md:flex">
        <div class="sm:w-full md:w-2/3 md:mr-10 mb-10">
            <h1>Hi Show</h1>
            <h2>{{ $applicationLog }}</h2>

{{--            <div>--}}
{{--                <div>--}}
{{--                    {!! $applicationLog->description !!}--}}
{{--                    @if($applicationLog->subject_link)--}}
{{--                        <a href="{{ $applicationLog->subject_link }}" class="link-teal"><i class="fa fa-fw fa-external-link-alt"></i></a>--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->actor_id !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->subject !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->level !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->user_agent !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->browser !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->browser_version !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->platform !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->platform_version !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    {!! $applicationLog->ip !!}--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="font-light text-xs text-gray-600 ">--}}
{{--                        <div class="mb-2">--}}
{{--                            <i class="fa fa-fw fa-user mr-1"></i>{{ $applicationLog->actor->name }}--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <i class="fa fa-fw fa-clock mr-1"></i>{{ $applicationLog->created_at }}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
