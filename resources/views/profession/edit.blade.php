@extends('layout')
@section('title','Agregar usuario')
@section('content')
    <h1>Usuarios</h1>

    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar usuarios al sistema</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profession.update',$profession) }}" method="POST">
                        {{ method_field('PATCH') }}
                        @include('profession._form')
                        <button class="btn btn-success">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection