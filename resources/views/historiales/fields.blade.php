<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    {!! Form::text('usuario_id', null, ['class' => 'form-control']) !!}
</div>

<!-- E Informatico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('e_informatico_id', 'E Informatico Id:') !!}
    {!! Form::text('e_informatico_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidad_id', 'Unidad Id:') !!}
    {!! Form::text('unidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area Id:') !!}
    {!! Form::text('area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_area_id', 'Sub Area Id:') !!}
    {!! Form::text('sub_area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('historiales.index') !!}" class="btn btn-default">Cancel</a>
</div>
