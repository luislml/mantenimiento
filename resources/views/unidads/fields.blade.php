<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'UNIDAD:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unidads.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
