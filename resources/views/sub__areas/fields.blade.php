<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('subAreass.indexx', [$subArea->area_id]) !!}" class="btn btn-default">CANCELAR</a>

</div>
