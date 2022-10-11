@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">
        <!-- Anotación obligatoria para los foormularios -->
        @csrf
        <label>
            Título del proyecto <br>
            <input type="text" name="title" value="{{old('title')}}">
        </label>
        <br>
        <label>
            URL del proyecto <br>
            <input type="text" name="url" value="{{old('url')}}">
        </label>
        <br>
        <label>
            Descripción del proyecto <br>
            <textarea name="description">{{old('description')}}</textarea>
        </label>
        <br>
        <button>Guardar</button>


    </form>

@endsection
