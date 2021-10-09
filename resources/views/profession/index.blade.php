@extends('layout')
@section('title','CRUD professions')
@section('content')
    <h1>professions</h1>

    <div class="">
        <a href="{{ route('profession.create') }}" class="btn btn-primary">Agregar</a>
        <table class="table table-responsive-md table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profesión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php( $i = 0 )
                @foreach ($professions as $profession)
                <tr>
                    <td scope="row">{{ $i += 1 }}</td>
                    <td>{{ $profession->name }}</td>
                    <td>
                        <a href="{{ route('profession.edit',$profession) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('profession.destroy',$profession) }}" method="POST">
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