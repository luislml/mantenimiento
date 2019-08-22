<!-- Tipo Equipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_equipo', 'Tipo Equipo:') !!}
    {!! Form::text('tipo_equipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('equipos.index') !!}" class="btn btn-default">Cancel</a>
</div>
