<!-- Unidad Id Field -->
<div class="form-group col-sm-6">
    
    {!! Form::hidden('unidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'AREA:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areass.indexx', [$area->unidad_id]) !!}" class="btn btn-default">CANCELAR</a>
</div>
