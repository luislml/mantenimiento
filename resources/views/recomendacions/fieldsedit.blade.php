<!-- Recomendacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recomendacion', 'Recomendacion:') !!}
    {!! Form::textarea('recomendacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cite Id Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('recomendacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
