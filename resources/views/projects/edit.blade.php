@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        <!-- Anotación obligatoria para los foormularios -->
        @method('PATCH')

        @include('projects._form', ['btnText' => 'Actualizar'])



    </form>

@endsection
