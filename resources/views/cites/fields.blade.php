<!-- Gestion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gestion_id', 'Gestion Id:') !!}
    {!! Form::text('gestion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gestion', 'Gestion:') !!}
    {!! Form::text('gestion', null, ['class' => 'form-control']) !!}
</div>

<!-- Mantenimiento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mantenimiento_id', 'Mantenimiento Id:') !!}
    {!! Form::text('mantenimiento_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cite', 'Cite:') !!}
    {!! Form::text('cite', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cites.index') !!}" class="btn btn-default">Cancel</a>
</div>
