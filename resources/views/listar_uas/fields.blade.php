<!-- Unidades Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidades', 'Unidades:') !!}
    {!! Form::text('unidades', null, ['class' => 'form-control']) !!}
</div>

<!-- Areas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('areas', 'Areas:') !!}
    {!! Form::text('areas', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Areas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_areas', 'Sub Areas:') !!}
    {!! Form::text('sub_areas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('listarUas.index') !!}" class="btn btn-default">Cancel</a>
</div>
