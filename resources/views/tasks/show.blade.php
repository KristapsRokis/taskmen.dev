@extends('layout')
@section('content')

@include('partials._search')

<div class="uzdevums-single">
    <div class="uzdevums-task">
        <h2>{{$task['title']}}</h2>
    </div>
    <div class="uzdevums-desc">
        <p>{{$task['description']}}</p>
    </div>
    <div class="uzdevums-bottom">
        <u class="uzdevums-parrent">
            <li class="termins">{{$task['duedate']}}</li>
            <li class="prioritate">Prioritāte: {{$task['priority']}}</li>
            <li class="statuss">Statuss: {{$task['status']}}</li>
        </u>
        <div class="submit-uzd" id="submit-uzd">
            <button type="submit" class="submit-uzdevums">
                Iesniegt
            </button>
        </div>
    </div>
    <div class="edit">
        <a href="/task/{{$task->id}}/edit">Rediģēt</a>
    </div>
    <form method="POST" action="/task/{{$task->id}}">
        @csrf
        @method('DELETE')
        <button class="delete">Dzēst</button>
    </form>
</div>


@include('partials._createbutton')


@endsection