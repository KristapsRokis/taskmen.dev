@extends('layout')
@section('content')

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
</div>



@endsection