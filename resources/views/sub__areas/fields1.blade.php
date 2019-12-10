<!-- Area Id Field -->

{!! Form::hidden('area_id', $area_id, ['class' => 'form-control']) !!}

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('subAreass.indexx', [$area_id]) !!}" class="btn btn-default">CANCELAR</a>

</div>
