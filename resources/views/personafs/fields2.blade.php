
                            <div class="col-md-3">
   <label for="" class="control-label">Seleccione Estado</label>
      <select name="estado" id="" class="form-control">
         <option >Seleccione</option>
         
            <option value="activo">activo</option>
            <option value="De vaja">De vaja</option>
            <option value="Vacaciones">vacaciones</option>
         
      </select>
</div>
                            


<div class="form-group col-sm-12">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('personafs.index') !!}" class="btn btn-default">CANCELAR</a>
                            </div>