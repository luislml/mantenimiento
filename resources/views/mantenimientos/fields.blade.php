<!-- E Informatico Id Field -->
<div class="col-md-6">
   {!! Form::label('e_informatico_id', 'SELECCIONE EQUIPO:') !!}
      <select name="e_informatico_id" id="equipo_id" class="form-control">
           <option value="">SELECCIONE EQUIPO</option>
       </select>
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'FECHA:') !!}
    
    <input id="fecha" type="date" name="fecha" class="form-control">
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'DESCRIPCION:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
</div>
<!-- auth user -->

    
    
   <input id="usuario_id" type="hidden" name="usuario_id" class="form-control" value="{!! Auth::user()->id !!}">
                    <div class="form-group col-sm-6">
                        <label>GENERAR CITE</label>
                        <input type="checkbox" name="cite" value="si">
                      </div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mantenimientos.index') !!}" class="btn btn-default">CANCELAR</a>
</div>
