@extends('layout')
@section('content')

<main>
    <div class="c-box">
        <div
            class="c-subbox"
        >
            <h2 class="center">
                Rediģēt uzdevumu
            </h2>

            <form method="POST" action="/task/{{$task->id}}/edit" class="c-form">
                @csrf
                @method('PUT')
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
                        <p>Apraksts</p>
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
                        ><p>Termiņš</p></label
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
                        ><p>Prioritāte<p></label
                    >
                    <select
                        type="text"
                        class="c-ramis"
                        name="priority"
                        value="{{$task->priority}}">
                        <option value="Augsta" {{ $task->priority == 'Augsta' ? 'selected' : '' }}>Augsta</option>
                        <option value="Vidēja" {{ $task->priority == 'Vidēja' ? 'selected' : '' }}>Vidēja</option>
                        <option value="Zema" {{ $task->priority == 'Zema' ? 'selected' : '' }}>Zema</option>
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
                        value="{{$task->tags}}">
                        <option value="Finanses" {{ $task->tags == 'Finanses' ? 'selected' : '' }}>Finanšu pārstāvji</option>
                        <option value="Kolektīvs" {{ $task->tags == 'Kolektīvs' ? 'selected' : '' }}>Kolektīvs</option>
                        <option value="Apkalpojošais" {{ $task->tags == 'Apkalpojošais' ? 'selected' : '' }}>Apkalpojošais personāls</option>
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
                        Rediģēt uzdevumu 
                    </button>

                    <a href="/" class="atcelt"><p> Atcelt</p> </a>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection