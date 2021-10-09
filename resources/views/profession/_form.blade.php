{{ csrf_field() }}
<div class="form-group">
    <label for="">Profesión: </label>
    <input type="text" name="name" value="{{ old('name',$profession->name) }}" id="" class="form-control" placeholder="Profession" aria-describedby="helpId">
    {!! $errors->first('name','<small id="helpId" class="text-muted">:message</small>') !!}
</div>