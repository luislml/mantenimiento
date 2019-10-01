<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder'=>'Ej. JUAN', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'APELLIDO:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','placeholder'=>'Ej. PEREZ', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'CEDULA DE INDENTIDAD (C.I.):') !!}
    {!! Form::text('ci', null, ['class' => 'form-control','placeholder'=>'Ej. 10539845 o 1053658L']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'TELEFONO O CEL:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control','placeholder'=>'Ej. 78639578']) !!}
</div>

<!-- Rol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rol', 'ROL:') !!}
    {!! Form::select('rol', [''=>'','operador' => 'operador', 'Admin' => 'Admin', 'estudiante' => 'estudiante'], null, ['class' => 'form-control']) !!}
</div>
<input class="form-control" name="estado" type="hidden" value="activo">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
