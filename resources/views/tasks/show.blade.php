@extends('layout')
@section('content')

@include('partials._search')

<div class="uzdevums-single">
    <div class="uzdevums-task">
        <h2>{{$task['title']}}</h2>
    </div>
    <div class="amats">
        {{$task['tags']}}
    </div>
    <div class="uzdevums-desc">
        <p>{{$task['description']}}</p>
    </div>
    <div class="uzdevums-bottom">
        <u class="uzdevums-parrent">
            <li class="termins">{{$task['duedate']}}</li>
            <li class="prioritate">@lang('messages.upriority'){{$task['priority']}}</li>
            <li class="statuss">@lang('messages.ustatus'){{$task['status']}}</li>
        </u>
        <form method="POST" action="/task/{{$task->id}}">
            @csrf
            @method('PUT')
            <div class="submit-uzd" id="submit-uzd">
                <input type="hidden" name="status" value="Iesniegts">
                <button type="submit" class="submit-uzdevums">
                    @lang('messages.done')
                </button>
            </div>
        </form>
        
    </div>
    @if(auth()->user()->admin)
    <div class="edit">
        <a href="/task/{{$task->id}}/edit">@lang('messages.edit')</a>
    </div>
    <form method="POST" action="/task/{{$task->id}}">
        @csrf
        @method('DELETE')
        <button class="delete">@lang('messages.delete')</button>
    </form>
    @endif
</div>

@if(auth()->user()->admin)
    @include('partials._createbutton')
@endif

@endsection