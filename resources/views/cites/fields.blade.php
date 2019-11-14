<!-- Equipo -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo', 'EQUIPO:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['nombre'] }}" disabled="disabled" class="form-control">
    <!-- Equipo codigo activo fijo -->
    {!! Form::label('codigo activo', 'CODIGO DE ACTIVO:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['numero_activo'] }}" disabled="disabled" class="form-control">
    <!-- Equipo marca -->
    {!! Form::label('marca', 'MARCA:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['marca'] }}" disabled="disabled" class="form-control">
    <!-- Equipo modelo -->
    {!! Form::label('modelo', 'MODELO:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['modelo'] }}" disabled="disabled" class="form-control">
</div>
<!-- Gestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gestion_id', 'GESTION:') !!}
    {!! Form::text('gestion_id', null, ['class' => 'form-control', 'disabled'=>'disabled']) !!} 
    <!-- Cite Field -->
    {!! Form::label('cite', 'CITE:') !!}
    {!! Form::text('cite', null, ['class' => 'form-control', 'disabled'=>'disabled']) !!}
    <!-- Usuario -->
    {!! Form::label('usuario', 'USUARIO:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['usuario']['nombre'] }} {{ $cite->mantenimiento['equipos']['usuario']['apellido'] }}" disabled="disabled" class="form-control">
    <!-- Unidad -->
    {!! Form::label('unidad', 'UNIDAD:') !!}
    <input type="text" value="{{ $cite->mantenimiento['equipos']['usuario']['unidad']['nombre'] }}" disabled="disabled" class="form-control">
</div>



<!-- trabajo realizado -->
<div class="form-group col-sm-12">
    {!! Form::label('trabajo realizado', 'TRABAJO REALIZADO:') !!}
    <input type="textarea" value="{{ $cite->mantenimiento['descripcion'] }}" disabled="disabled" class="form-control">
</div>
<!-- observaciones -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'OBSERVACIONES:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>
<!-- trabajo recomendaciones -->
<div class="form-group col-sm-6">
    {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
    {!! Form::textarea('recommendation', null, ['class' => 'form-control', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cites.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
