@extends('layout')
@section('content')

@include('partials._search')

@if(count($tasks) == 0)
    <div class="empty">
    Netika atrasts neviens uzdevums
    </div>
@else
    <main class="main">
        <ul class="legenda-parent">
            <li class="legenda-title">
                Nosaukums
            </li>
            <li class="legenda-desc">
                Apraksts
            </li>
            <li class="legenda-due">
                    <a href="/termins">Termiņš</a>
            </li>
            <li class="legenda-prority">
                <a href="/prioritate">Prioritāte</a>
            </li>
            <li class="legenda-status">
                <a href="/statuss">Statuss</a>
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