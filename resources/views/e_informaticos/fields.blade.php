<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Mac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mac', 'Mac:') !!}
    {!! Form::text('mac', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_activo', 'Numero Activo:') !!}
    {!! Form::number('numero_activo', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_serie', 'Numero Serie:') !!}
    {!! Form::number('numero_serie', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eInformaticos.index') !!}" class="btn btn-default">Cancel</a>
</div>
