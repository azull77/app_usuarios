{{ csrf_field() }}
<div class="form-group">
    <label for="">Nombre: </label>
    <input type="text" name="name" value="{{ old('name',$usuario->name) }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    {!! $errors->first('name','<small id="helpId" class="text-muted">:message</small>') !!}
</div>
<div class="form-group">
    <label for="">Email: </label>
    <input type="text" name="email" value="{{ old('email',$usuario->email) }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    {!! $errors->first('email','<small id="helpId" class="text-muted">:message</small>') !!}
</div>
<div class="form-group">
    <label for="">Clave: </label>
    <input type="text" name="password" value="{{ old('password') }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    {!! $errors->first('password','<small id="helpId" class="text-muted">:message</small>') !!}
</div>
<div class="form-group">
    <label for="">Profesión: </label>
    <select class="form-control" name="profession_id">
        @if(isset($usuario->profesion->id))
            <option value="{{ $usuario->profesion->id }}">{{ $usuario->profesion->name }}</option>
        @else
        <option value="">Seleccionar</option>
        @endif
        @foreach ($professions as $profession)
        <option value="{{ old($profession->id,$profession->id) }}">{{ old($profession->name,$profession->name) }}</option>
        @endforeach
    </select>
</div>