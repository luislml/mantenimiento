<div class="col-md-3">
   <label for="" class="control-label">Seleccione Unidad</label>
      <select name="unidad_id" id="unidad" class="form-control">
         <option value="">Seleccione</option>
         @foreach ($unidad as $unidads)
            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
         @endforeach
      </select>
</div>
                            
<div class="col-md-3">
   <label for="" class="control-label">Seleccione Area</label>
      <select name="area_id" id="area" class="form-control">
           <option value="">Seleccione area</option>
       </select>
</div>


<div class="col-md-3">
   <label for="" class="control-label">Seleccione Sub Area</label>
      <select name="sub_area_id" id="subarea" class="form-control">
           <option value="">Seleccione sub area</option>
       </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('equipounidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
