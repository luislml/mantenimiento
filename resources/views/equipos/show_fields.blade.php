<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $equipo->id !!}</p>
</div>

<!-- Tipo Equipo Field -->
<div class="form-group">
    {!! Form::label('tipo_equipo', 'Tipo Equipo:') !!}
    <p>{!! $equipo->tipo_equipo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $equipo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $equipo->updated_at !!}</p>
</div>

