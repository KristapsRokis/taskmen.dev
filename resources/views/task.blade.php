@extends('layout')
@section('content')

<h2>{{$task['title']}}</h2>
<p>{{$task['description']}}</p>
<p>{{$task['duedate']}}</p>
<p>{{$task['priority']}}</p>
<p>{{$task['status']}}</p>


@endsection