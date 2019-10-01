
                            <div class="col-md-3">
   <label for="" class="control-label">Seleccione nueva unidad</label>
      <select name="unidad_id" id="unidad" class="form-control">
         <option value="">Seleccione</option>
         @foreach ($unidad as $unidads)
            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
         @endforeach
      </select>
</div>
                            
<div class="col-md-3">
  
        <label for="" class="control-label">Seleccione nueva area</label>
    
      <select name="area_id" id="area" class="form-control">
           <option value="">Seleccione area</option>
       </select>
</div>


<div class="col-md-3">
  
    <label for="" class="control-label">Seleccione nueva sub area</label>
    
      <select name="sub_area_id" id="subarea" class="form-control">
           <option value="">Seleccione sub area</option>
       </select>
</div>

<div class="form-group col-sm-12">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('personafs.index') !!}" class="btn btn-default">CANCELAR</a>
                            </div>