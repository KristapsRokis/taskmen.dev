@extends('layout')
@section('content')

<main>
    <div class="c-box">
        <div
            class="c-subbox"
        >
            <h2 class="center">
                @lang('messages.tedit')
            </h2>

            <form method="POST" action="/task/{{$task->id}}/edit" class="c-form">
                @csrf
                @method('PUT')
                <div class="c-title">
                    <label
                        for="title"
                        class="c-nosaukums"
                        ><p>@lang('messages.tit')<p></label
                    >
                    <input
                        type="text"
                        class="c-ramis"
                        name="title"
                        value="{{$task->title}}"
                    />
                    @error('title')
                        <p class="error1">{{$message}}</p>
                    @enderror
                </div>

                <div class="c-title">
                    <label
                        for="description"
                        class="c-nosaukums"
                    >
                        <p>@lang('messages.desc')</p>
                    </label>
                    <textarea
                        class="c-ramis-desc"
                        name="description"
                        rows="10"
                    >{{$task->description}}</textarea>
                    @error('description')
                        <p class="error2">{{$message}}</p>
                    @enderror
                </div>

                <div class="c-title">
                    <label for="duedate" class="c-nosaukums"
                        ><p>@lang('messages.due')</p></label
                    >
                    <input
                        type="date"
                        class="c-ramis"
                        name="duedate"
                        value="{{$task->duedate}}"
                    />
                    @error('duedate')
                        <p class="error3">{{$message}}</p>
                    @enderror
                </div>

                <div class="c-title">
                    <label
                        for="priority"
                        class="c-nosaukums"
                        ><p>@lang('messages.priority')<p></label
                    >
                    <select
                        type="text"
                        class="c-ramis"
                        name="priority"
                        value="{{$task->priority}}">
                        <option value="Augsta" {{ $task->priority == 'Augsta' ? 'selected' : '' }}>@lang('messages.high')</option>
                        <option value="Vidēja" {{ $task->priority == 'Vidēja' ? 'selected' : '' }}>@lang('messages.medium')</option>
                        <option value="Zema" {{ $task->priority == 'Zema' ? 'selected' : '' }}>@lang('messages.low')</option>
                    </select>
                    @error('priority')
                        <p class="error4">{{$message}}</p>
                    @enderror
                </div>

                <div class="c-title">
                    <label
                        for="tags"
                        class="c-nosaukums"
                        ><p>@lang('messages.add')<p></label
                    >
                    <select
                        type="text"
                        class="c-ramis"
                        name="tags"
                        value="{{$task->tags}}">
                        <option value="Finanses" {{ $task->tags == 'Finanses' ? 'selected' : '' }}>@lang('messages.finanse')</option>
                        <option value="Apkalpojošais" {{ $task->tags == 'Apkalpojošais' ? 'selected' : '' }}>@lang('messages.apkalp')</option>
                        <option value="Kolektīvs" {{ $task->tags == 'Kolektīvs' ? 'selected' : '' }}>@lang('messages.staff')</option>
                    </select>
                    </select>
                    @error('tags')
                        <p class="error5">{{$message}}</p>
                    @enderror
                </div>

                <div class="">
                    <button
                        class="c-poga"
                    >
                        @lang('messages.tedit')
                    </button>

                    <a href="/" class="atcelt"><p>@lang('messages.cancel')</p> </a>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection