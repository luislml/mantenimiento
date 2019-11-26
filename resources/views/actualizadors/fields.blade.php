<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'FECHA:') !!}
    <input id="fecha" type="date" name="fecha" class="form-control">
</div>



<!-- Bits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bits', 'BITS:') !!}
    {!! Form::select('bits', ['' => '','32' => '32','64' => '64'], null, ['class' => 'form-control']) !!}
</div>

<!-- Actualizador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actualizador', 'ACTUALIZADOR:') !!}
    {!! Form::file('actualizador') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actualizadors.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
