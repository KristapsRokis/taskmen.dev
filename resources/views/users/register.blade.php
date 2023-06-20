@extends('layout')
@section('content')
<main>
    <div class="c-box">
        <div
            class="c-subbox"
        >
            <h2 class="center">
                Reģistrēties
            </h2>

            <form method="POST" action="/users" class="c-form">
                @csrf
                <div class="c-title">
                    <label
                        for="name"
                        class="c-nosaukums"
                        ><p>Vārds uzvārds<p></label
                    >
                    <input
                        type="text"
                        class="c-ramis"
                        name="name"
                        value="{{old('name')}}"
                    />
                    @error('name')
                        <p class="error1">{{$message}}</p>
                    @enderror
                </div>
                <div class="c-title">
                    <label
                        for="email"
                        class="c-nosaukums"
                        ><p>E-pasts<p></label
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
                        for="tags"
                        class="c-nosaukums"
                        ><p>Amats<p></label
                    >
                    <select
                        type="text"
                        class="c-ramis"
                        name="tags"
                        value="{{old('tags')}}">
                        <option value="Finanses" {{ old('tags') == 'Finanses' ? 'selected' : '' }}>Finanšu pārstāvis</option>
                        <option value="Apkalpojošais" {{ old('tags') == 'Apkalpojošais' ? 'selected' : '' }}>Apkalpojošais personāls</option>
                        <option value="Kolektīvs" {{ old('tags') == 'Kolektīvs' ? 'selected' : '' }}>Kolektīvs</option>
                    </select>
                    </select>
                    @error('tags')
                        <p class="error5">{{$message}}</p>
                    @enderror
                </div>
                <div class="c-title">
                    <label
                        for="password"
                        class="c-nosaukums"
                        ><p>Parole<p></label
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
                <div class="c-title">
                    <label
                        for="password_confirmation"
                        class="c-nosaukums"
                        ><p>Apstiprināt paroli<p></label
                    >
                    <input
                        type="password"
                        class="c-ramis"
                        name="password_confirmation"
                        value="{{old('password_confirmation')}}"
                    />
                    @error('password_confirmation')
                        <p class="error1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <button
                        class="c-poga"
                    >
                        Reģistrēties 
                    </button>

                    <a href="/login" class="atcelt-re"><p>Reģistrētiem lietotājiem</p> </a>
                </div>
            </form>
        </div>
    </div>
</main>




@endsection