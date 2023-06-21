@extends('layout')
@section('content')

@include('partials._search')

@if(count($tasks) == 0)
    <div class="empty">
        @lang('messages.empty')
    </div>
@else
    <main class="main">
        <ul class="legenda-parent">
            <li class="legenda-title">
                @lang('messages.tit')
            </li>
            <li class="legenda-desc">
                @lang('messages.desc')
            </li>
            <li class="legenda-due">
                    <a href="/termins">@lang('messages.due')</a>
            </li>
            <li class="legenda-prority">
                <a href="/prioritate">@lang('messages.priority')</a>
            </li>
            <li class="legenda-status">
                <a href="/statuss">@lang('messages.statuss')</a>
            </li>
        </ul>
        @foreach($tasks as $task)
            <x-task-card :task="$task"/>
        @endforeach

    </main>
    
@endif

@if(auth()->user()->admin)
    @include('partials._createbutton')
@endif

@endsection