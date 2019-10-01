@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            ASIGNAR EQUIPO A PERSONAL
        </h1>
    </section>
    @include('flash::message')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
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
<br>
<br>
<br>
<br>


                    {!! Form::open(['route' => 'userequipos.store']) !!}

                        @include('userequipos.fields')

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
              

      $.get('getareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#area').empty();
                $('#area').append("<option value=''>-- SELECCIONE AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#area').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });

      $.get('getequipos/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#equipo_id').empty();
                $('#equipo_id').append("<option value=''>-- SELECCIONE EQUIPO --</option>");

            $.each(data, function (index, value) {
             
                    $('#equipo_id').append("<option value='" + value.id + "'>" + value.nombre +" | "+ value.marca +" | "+ value.modelo +" | "+ value.numero_activo +"</option>");
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

      $.get('getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });

      $.get('getequiposa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#equipo_id').empty();
                $('#equipo_id').append("<option value=''>-- SELECCIONE EQUIPO --</option>");

            $.each(data, function (index, value) {
             
                    $('#equipo_id').append("<option value='" + value.id + "'>" + value.nombre +" | "+ value.marca +" | "+ value.modelo +" | "+ value.numero_activo +"</option>");
                })
      });

    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#subarea").change(function(){
      var categoria = $(this).val();
            
      $.get('getusuariossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });

      $.get('getequipossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#equipo_id').empty();
                $('#equipo_id').append("<option value=''>-- SELECCIONE EQUIPO --</option>");

            $.each(data, function (index, value) {
             
                    $('#equipo_id').append("<option value='" + value.id + "'>" + value.nombre +" | "+ value.marca +" | "+ value.modelo +" | "+ value.numero_activo +"</option>");
                })
      });

    });
  });
</script>
@endsection