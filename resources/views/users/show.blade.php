@extends('layout')

@section('title',"Detalle del usuario {$usuario->name}")

@section('content')
    
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">{{ $usuario->name }}</h4>
            <p class="card-text">{{ $usuario->profesion->name }}</p>
        </div>
    </div>


@endsection

