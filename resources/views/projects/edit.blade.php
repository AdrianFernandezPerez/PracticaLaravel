@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        <!-- Anotación obligatoria para los foormularios -->
        @csrf @method('PATCH')
        <label>
            Título del proyecto <br>
            <input type="text" name="title" value="{{old('title', $project->title)}}">
        </label>
        <br>
        <label>
            URL del proyecto <br>
            <input type="text" name="url" value="{{old('url', $project->url)}}">
        </label>
        <br>
        <label>
            Descripción del proyecto <br>
            <textarea name="description">{{old('description', $project->description)}}</textarea>
        </label>
        <br>
        <button>Actualizar</button>


    </form>

@endsection
