
                            <div class="col-md-3">
   <label for="" class="control-label">SELECCIONE ESTADO</label>
      <select name="estado" id="" class="form-control">
         <option >SELECCIONE</option>
         
            <option value="ACTIVO">ACTIVO</option>
            <option value="DE BAJA">DE BAJA</option>
            
         
      </select>
</div>
                            


<div class="form-group col-sm-12">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('personafs.index') !!}" class="btn btn-default">CANCELAR</a>
                            </div>