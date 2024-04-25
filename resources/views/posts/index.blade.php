@extends('layouts.app2')

{{--modificar los valores con section--}}

@section('title', "coders free")

@push('meta')

    <meta name="description" content="Aprende a programar desde cero">
    
@endpush
    
@section("content")
    <x-container width="7xl">
    
        <x-alert class="mb-32" type="info">  

            <x-slot name="title"> 
                Titulo de prueba 
            </x-slot>

            change a few things up and try submitting again. 
        </x-alert>

    </x-container>
@endsection



