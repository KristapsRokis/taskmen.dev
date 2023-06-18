@extends('layout')
@section('content')

<div class="bg-gray-50 border border-gray-200 rounded p-6">

@if(count($tasks) == 0)
    <p>Netika atrasts neviens uzdevums</p>
@endif

@foreach($tasks as $task)
<ul class="uzdevums">
    <li class="title">
        {{$task->title}}
    </li>
    <li class="desc">
        {{$task->description}}
    </li>
    <li class="due">
        {{$task->duedate}}
    </li>
    <li class="priority">
        {{$task->priority}}
    </li>
    <li class="status">
        {{$task->status}}
    </li>
    <li>
        <div class="submit-kaste-task">
            <button type="submit" class="submit-task">
                Iesniegt
            </button>
        </div>
    </li>
</ul>
    
</div>
@endforeach

@endsection