@extends('layouts.web')

@section('content')
    Detalles del curso
    <div class="text-center">
        <h1 class="text-2xl text-gray-700 mb-2 uppercase">
            Últimos cursos
        </h1>
        <h2 class="text-xl text-gray-600">
            Fórmate online
        </h2>
       
    </div>

    <livewire:course-list>
@endsection