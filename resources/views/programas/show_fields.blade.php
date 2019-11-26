<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $programa->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $programa->nombre !!}</p>
</div>

<!-- Bits Field -->
<div class="form-group">
    {!! Form::label('bits', 'Bits:') !!}
    <p>{!! $programa->bits !!}</p>
</div>

<!-- Archivo Field -->
<div class="form-group">
    {!! Form::label('archivo', 'Archivo:') !!}
    <p>{!! $programa->archivo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $programa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $programa->updated_at !!}</p>
</div>

