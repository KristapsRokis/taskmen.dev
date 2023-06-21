@extends('layout')
@section('content')
<main>
    <div class="c-box">
        <div
            class="c-subbox"
        >
            <h2 class="center">
                @lang('messages.login')
            </h2>

            <form method="POST" action="/users/authenticate" class="c-form">
                @csrf
                <div class="c-title">
                    <label
                        for="email"
                        class="c-nosaukums"
                        ><p>@lang('messages.email')<p></label
                    >
                    <input
                        type="email"
                        class="c-ramis"
                        name="email"
                        value="{{old('email')}}"
                    />
                    @error('email')
                        <p class="error1">{{$message}}</p>
                    @enderror
                </div>
                <div class="c-title">
                    <label
                        for="password"
                        class="c-nosaukums"
                        ><p>@lang('messages.password')<p></label
                    >
                    <input
                        type="password"
                        class="c-ramis"
                        name="password"
                        value="{{old('password')}}"
                    />
                    @error('password')
                        <p class="error1">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <button
                        class="c-poga"
                    >
                    @lang('messages.login') 
                    </button>

                    <a href="/register" class="registerp"><p>@lang('messages.registration') </p> </a>
                </div>
            </form>
        </div>
    </div>
</main>




@endsection