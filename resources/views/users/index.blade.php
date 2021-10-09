@extends('layout')
@section('title','CRUD Usuarios')
@section('content')
    <h1>Usuarios</h1>


    <div class="">
        <a href="{{ route('usuario.create') }}" class="btn btn-primary">Agregar</a>
        <table class="table table-responsive-md table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Profesion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php( $i = 0 )
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $i += 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profesion->name }}</td>
                    <td>
                        <a href="{{ route('usuario.show',$user) }}" class="btn btn-success">Ver</a>
                        <a href="{{ route('usuario.edit',$user) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('usuario.destroy',$user) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection