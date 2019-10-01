<!-- Equipo -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo', 'Equipo:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['nombre'] }}" disabled="disabled" class="form-control">
    <!-- Equipo codigo activo fijo -->
    {!! Form::label('codigo activo', 'Codigo de Activo:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['numero_activo'] }}" disabled="disabled" class="form-control">
    <!-- Equipo marca -->
    {!! Form::label('marca', 'Marca:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['marca'] }}" disabled="disabled" class="form-control">
    <!-- Equipo modelo -->
    {!! Form::label('modelo', 'Modelo:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['modelo'] }}" disabled="disabled" class="form-control">
</div>
<!-- Gestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gestion_id', 'Gestion:') !!}
    {!! Form::text('gestion_id', null, ['class' => 'form-control', 'disabled'=>'disabled']) !!} 
    <!-- Cite Field -->
    {!! Form::label('cite', 'Cite:') !!}
    {!! Form::text('cite', null, ['class' => 'form-control', 'disabled'=>'disabled']) !!}
    <!-- Usuario -->
    {!! Form::label('usuario', 'Usuario:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['usuario']['nombre'] }} {{ $cite->mantenimiento['equipos']['usuario']['apellido'] }}" disabled="disabled" class="form-control">
    <!-- Unidad -->
    {!! Form::label('unidad', 'Unidad:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['usuario']['unidad']['nombre'] }}" disabled="disabled" class="form-control">
</div>



<!-- trabajo realizado -->
<div class="form-group col-sm-12">
    {!! Form::label('trabajo realizado', 'Trabajo Realizado:') !!}
    <input type="textarea" value="{{ $cite->mantenimiento['descripcion'] }}" disabled="disabled" class="form-control">
</div>
<!-- observaciones -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>
<!-- trabajo recomendaciones -->
<div class="form-group col-sm-6">
    {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
    {!! Form::textarea('recommendation', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cites.index') !!}" class="btn btn-default">Cancel</a>
</div>
