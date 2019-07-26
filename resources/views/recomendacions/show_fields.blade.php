<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $recomendacion->id !!}</p>
</div>

<!-- Recomendacion Field -->
<div class="form-group">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    <p>{!! $recomendacion->recomendacion !!}</p>
</div>

<!-- Cite Id Field -->
<div class="form-group">
    {!! Form::label('cite_id', 'Cite Id:') !!}
    <p>{!! $recomendacion->cite_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $recomendacion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $recomendacion->updated_at !!}</p>
</div>

