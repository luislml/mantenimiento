<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Bits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bits', 'BITS:') !!}
    {!! Form::select('bits', ['' => '','32' => '32','64' => '64'], null, ['class' => 'form-control']) !!}
</div>

<!-- Archivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archivo', 'ARCHIVO:') !!}
    {!! Form::file('archivo') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('programas.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
