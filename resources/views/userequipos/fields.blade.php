<!-- Usuario Id Field -->
<div class="col-md-4">
   <label for="" class="control-label">SELECCIONE USUARIO:</label>
      <select name="usuario_id" id="usuario_id" class="form-control">
           <option value="">-- SELECCIONE USUARIO --</option>
       </select>
</div>

<!-- E Informatico Id Field -->
<div class="col-md-4">
   <label for="" class="control-label">SELECCIONE EQUIPO:</label>
      <select name="id" id="equipo_id" class="form-control">
           <option value="">-- SELECCIONE EQUIPO --</option>
       </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userequipos.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
