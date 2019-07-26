<!-- E Informatico Id Field -->
<div class="col-md-6">
   {!! Form::label('e_informatico_id', 'E Informatico Id:') !!}
      <select name="e_informatico_id" id="equipo_id" class="form-control">
           <option value="">Seleccione equipo</option>
       </select>
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    
    <input id="fecha" type="date" name="fecha" class="form-control">
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>
<!-- auth user -->

    
    
   <input id="usuario_id" type="hidden" name="usuario_id" class="form-control" value="{!! Auth::user()->id !!}">


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mantenimientos.index') !!}" class="btn btn-default">Cancel</a>
</div>
