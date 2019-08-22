<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userequipo->id !!}</p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{!! $userequipo->usuario_id !!}</p>
</div>

<!-- E Informatico Id Field -->
<div class="form-group">
    {!! Form::label('e_informatico_id', 'E Informatico Id:') !!}
    <p>{!! $userequipo->e_informatico_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userequipo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userequipo->updated_at !!}</p>
</div>

<div class="form-group">
    <h4>QR code</h4>
    {!! QrCode::size(300)->generate(
        "
        nombre:$usuario->nombre 
        apellido:$usuario->apellido 
        equipo:$userequipo->nombre
        modelo:$userequipo->modelo
        unidad:$unidad->nombre
        "); !!}
    
</div>

