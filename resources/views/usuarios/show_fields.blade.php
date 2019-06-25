<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $usuario->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $usuario->nombre !!}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{!! $usuario->apellido !!}</p>
</div>

<!-- Ci Field -->
<div class="form-group">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{!! $usuario->ci !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $usuario->telefono !!}</p>
</div>

<!-- Rol Field -->
<div class="form-group">
    {!! Form::label('rol', 'Rol:') !!}
    <p>{!! $usuario->rol !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $usuario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $usuario->updated_at !!}</p>
</div>

<div class="form-group">
    <h4>QR code</h4>
    {!! QrCode::size(300)->generate(
        "
        nombre:$usuario->nombre, 
        apellido:$usuario->apellido, 
        ci:$usuario->ci,
        telefono:$usuario->telefono,
        rol:$usuario->rol
        "); !!}
    
</div>





