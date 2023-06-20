@extends('layout')
@section('content')

<main>
    <div class="c-box">
        <div
            class="c-subbox"
        >
            <h2 class="center">
                Izveidot uzdevumu
            </h2>

            <form method="POST" action="/task" class="c-form">
                @csrf
                <div class="c-title">
                    <label
                        for="title"
                        class="c-nosaukums"
                        ><p>Nosaukums<p></label
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
                        <p>Apraksts</p>
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
                        ><p>Termiņš</p></label
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
                        ><p>Prioritāte<p></label
                    >
                    <select
                        type="text"
                        class="c-ramis"
                        name="priority"
                        value="{{old('priority')}}">
                        <option value="Augsta" {{ old('priority') == 'Augsta' ? 'selected' : '' }}>Augsta</option>
                        <option value="Vidēja" {{ old('priority') == 'Vidēja' ? 'selected' : '' }}>Vidēja</option>
                        <option value="Zema" {{ old('priority') == 'Zema' ? 'selected' : '' }}>Zema</option>
                    </select>
                    @error('priority')
                        <p class="error4">{{$message}}</p>
                    @enderror
                </div>

                <div class="c-title">
                    <label
                        for="tags"
                        class="c-nosaukums"
                        ><p>Piešķirt uzdevumu<p></label
                    >
                    <select
                        type="text"
                        class="c-ramis"
                        name="tags"
                        value="{{old('tags')}}">
                        <option value="Finanses" {{ old('tags') == 'Finanses' ? 'selected' : '' }}>Finanšu pārstāvji</option>
                        <option value="Kolektīvs" {{ old('tags') == 'Kolektīvs' ? 'selected' : '' }}>Kolektīvs</option>
                        <option value="Apkalpojošais" {{ old('tags') == 'Apkalpojošais' ? 'selected' : '' }}>Apkalpojošais personāls</option>
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
                        Izveidot uzdevumu 
                    </button>

                    <a href="/" class="atcelt"><p> Atcelt</p> </a>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection