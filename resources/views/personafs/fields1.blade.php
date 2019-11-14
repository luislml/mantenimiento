
                            <div class="col-md-3">
   <label for="" class="control-label">SELECCIONE UNIDAD:</label>
      <select name="unidad_id" id="unidad" class="form-control">
         <option value="">--SELECCIONE UNIDAD--</option>
         @foreach ($unidad as $unidads)
            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
         @endforeach
      </select>
</div>
                            
<div class="col-md-3">
  
        <label for="" class="control-label">SELECCIONE AREA:</label>
    
      <select name="area_id" id="area" class="form-control">
           <option value="">--SELECCIONE AREA--</option>
       </select>
</div>


<div class="col-md-3">
  
    <label for="" class="control-label">SELECCIONE SUB AREA:</label>
    
      <select name="sub_area_id" id="subarea" class="form-control">
           <option value="">--SELECCIONE SUB AREA--</option>
       </select>
</div>

<div class="form-group col-sm-12">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('personafs.index') !!}" class="btn btn-default">CANCELAR</a>
                            </div>