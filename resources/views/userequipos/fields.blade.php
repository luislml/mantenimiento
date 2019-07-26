<!-- Usuario Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">Seleccione usuario</label>
      <select name="usuario_id" id="usuario_id" class="form-control">
           <option value="">Seleccione usuario</option>
       </select>
</div>

<!-- E Informatico Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">Seleccione equipo</label>
      <select name="id" id="equipo_id" class="form-control">
           <option value="">Seleccione equipo</option>
       </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userequipos.index') !!}" class="btn btn-default">Cancel</a>
</div>
