@extends('layouts.app')

@section('content')
    
<section class="content-header">
        <h1>
            PERSONAL
        </h1>
        <script>
          function upperCaseF(a){
            setTimeout(function(){
                a.value = a.value.toUpperCase();
                }, 1);
            }
        </script>
        @include('flash::message')
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'personafs.store']) !!}

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'NOMBRE:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder'=>'Ej. JUAN', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'APELLIDO:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','placeholder'=>'Ej. PEREZ', 'onkeydown'=>'upperCaseF(this)']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'CEDULA DE INDENTIDAD (C.I.):') !!}
    {!! Form::text('ci', null, ['class' => 'form-control','placeholder'=>'Ej. 10539845 o 1053658L']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'TELEFONO O CEL:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control','placeholder'=>'Ej. 78639578']) !!}
</div>

<!-- estado Field -->
<input class="form-control" name="estado" type="hidden" value="activo">

<div class="col-md-4">
   <label for="" class="control-label">SELECCIONE UNIDAD:</label>
      <select name="unidad_id" id="unidad" class="form-control">
         <option value="">-- SELECCIONE UNIDAD --</option>
         @foreach ($unidad as $unidads)
            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
         @endforeach
      </select>
</div>
                            
<div class="col-md-4">
   <label for="" class="control-label">SELECCIONE AREA:</label>
      <select name="area_id" id="area" class="form-control">
           <option value="">-- SELECCIONE AREA --</option>
       </select>
</div>


<div class="col-md-4">
   <label for="" class="control-label">SELECCIONE SUB AREA:</label>
      <select name="sub_area_id" id="subarea" class="form-control">
           <option value="">-- SELECCIONE SUB AREA --</option>
       </select>
</div>

                            <div class="form-group col-sm-12">
                                {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('personafs.index') !!}" class="btn btn-default">CANCELAR</a>
                            </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $("#unidad").change(function(){
      var categoria = $(this).val();
              

      $.get('productByCategory/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#area').empty();
                $('#area').append("<option value=''>-- SELECCIONE AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#area').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })

      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#area").change(function(){
      var categoria = $(this).val();
              

      $.get('getsubareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#subarea').empty();
                $('#subarea').append("<option value=''>-- SELECCIONE SUB AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#subarea').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })

      });
    });
  });
</script>
@endsection

