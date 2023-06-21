@extends('layout')
@section('content')

<main>
    <div class="c-box">
        <div
            class="c-subbox"
        >
            <h2 class="center">
                @lang('messages.createbut')
            </h2>

            <form method="POST" action="/task" class="c-form">
                @csrf
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
                        value="{{old('title')}}"
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
                    >{{old('description')}}</textarea>
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
                        value="{{old('duedate')}}"
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
                        value="{{old('priority')}}">
                        <option value="Augsta" {{ old('priority') == 'Augsta' ? 'selected' : '' }}>@lang('messages.high')</option>
                        <option value="Vidēja" {{ old('priority') == 'Vidēja' ? 'selected' : '' }}>@lang('messages.medium')</option>
                        <option value="Zema" {{ old('priority') == 'Zema' ? 'selected' : '' }}>@lang('messages.low')</option>
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
                        value="{{old('tags')}}">
                        <option value="Finanses" {{ old('tags') == 'Finanses' ? 'selected' : '' }}>@lang('messages.finanse')</option>
                        <option value="Apkalpojošais" {{ old('tags') == 'Apkalpojošais' ? 'selected' : '' }}>@lang('messages.apkalp')</option>
                        <option value="Kolektīvs" {{ old('tags') == 'Kolektīvs' ? 'selected' : '' }}>@lang('messages.staff')</option>
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
                    @lang('messages.createbut')
                    </button>

                    <a href="/" class="atcelt"><p>@lang('messages.cancel')</p> </a>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection