@extends('layout')
@section('content')


@if(count($tasks) == 0)
    <p>Netika atrasts neviens uzdevums</p>
@endif

<main class="main">
    <ul class="legenda-parent">
        <li class="legenda-title">
            Nosaukums
        </li>
        <li class="legenda-desc">
            Apraksts
        </li>
        <li class="legenda-due">
            Termiņš
        </li>
        <li class="legenda-prority">
            Prioritāte
        </li>
        <li class="legenda-status">
            Statuss
        </li>
    </ul>

    @foreach($tasks as $task)
        <a href="/task/{{$task->id}}">
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
            </ul>
        </a>
    @endforeach
</main>

@endsection