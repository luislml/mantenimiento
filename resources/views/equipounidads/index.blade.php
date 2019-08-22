@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1 class="pull-left">Equipo-unidad</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('equipounidads.equipoinsert') !!}"><i class="fa fa-fw fa-plus"></i>Añadir Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        {!! Form::open(['route' => 'equipounidads.print', 'target'=>'_blank']) !!}
        <div class="box box-primary">
            <div class="box-body">
              
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
                <!-- Usuario Id Field -->
                <div class="col-md-3">
                   <label for="" class="control-label">Seleccione usuario</label>
                      <select name="usuario_id" id="usuario_id" class="form-control">
                           <option value="">Seleccione usuario</option>
                       </select>
                </div>
                
                
                <br>
                <br>
                <br>
                <br>
                    @include('equipounidads.table')
            </div>
        </div>

          {!! Form::submit('print', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
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
                $('#area').append("<option value=''>Selecciona Area</option>");

            $.each(data, function (index, value) {
             
                    $('#area').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });
      $.get('userequipos/getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion  
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>Selecciona usuario</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('equipounidads/get_equipos/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion      
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> Equipo </td>"+
              "<td> Mac </td>"+
              "<td> Numero de Activo </td>"+
              "<td> Modelo </td>"+
              "<td> Accion </td>"+
              +"</tr></thead>");              
            $.each(data, function (index, value) {                    
            $("#equipounidads-table").append("<tbody><tr>"+
              "<td>"+ value.nombre +"</td>"+
              "<td>"+ value.mac +"</td>"+
              "<td>"+ value.numero_activo +"</td>"+
              "<td>"+ value.modelo +"</td>"+
              "<td>"+ "<div class='btn-group'>"+
                "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> Cambiar de Unidad</a>"+
                "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> Cambiar estado</a>"+
              "</div>"+ 
              "</td>"+
              "</tr></tbody>"
              );
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
                $('#subarea').append("<option value=''>Selecciona Sub Area</option>");

            $.each(data, function (index, value) {
             
                    $('#subarea').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });
      $.get('userequipos/getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>Selecciona usuario</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });
      //llenado de la tabla con los equipos de area
      $.get('equipounidads/getequipos_a/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion      
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> Equipo </td>"+
              "<td> Mac </td>"+
              "<td> Numero de Activo </td>"+
              "<td> Modelo </td>"+
              "<td> Accion </td>"+
              +"</tr></thead>");              
            $.each(data, function (index, value) {                    
            $("#equipounidads-table").append("<tbody><tr>"+
              "<td>"+ value.nombre +"</td>"+
              "<td>"+ value.mac +"</td>"+
              "<td>"+ value.numero_activo +"</td>"+
              "<td>"+ value.modelo +"</td>"+
              "<td>"+ "<div class='btn-group'>"+
                "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> Cambiar de Unidad</a>"+
                "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> Cambiar estado</a>"+
              "</div>"+ 
              "</td>"+
              "</tr></tbody>"
              );
          })
      });
    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#subarea").change(function(){
      var categoria = $(this).val();           
      $.get('userequipos/getusuariossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>Selecciona usuario</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });
      //cargando la tabla con los equipos de sub area
    $.get('equipounidads/getequipos_sa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion      
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> Equipo </td>"+
              "<td> Mac </td>"+
              "<td> Numero de Activo </td>"+
              "<td> Modelo </td>"+
              "<td> Accion </td>"+
              +"</tr></thead>");              
            $.each(data, function (index, value) {                    
            $("#equipounidads-table").append("<tbody><tr>"+
              "<td>"+ value.nombre +"</td>"+
              "<td>"+ value.mac +"</td>"+
              "<td>"+ value.numero_activo +"</td>"+
              "<td>"+ value.modelo +"</td>"+
              "<td>"+ "<div class='btn-group'>"+
                "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> Cambiar de Unidad</a>"+
                "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> Cambiar estado</a>"+
              "</div>"+ 
              "</td>"+
              "</tr></tbody>"
              );
          })
      });
    });  
  });
</script>

<script>
  $(document).ready(function(){
    $("#usuario_id").change(function(){
      var usuario = $(this).val();           
      $.get('userequipos/getusuariose/'+usuario, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion        
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> Equipo </td>"+
              "<td> Mac </td>"+
              "<td> Numero de Activo </td>"+
              "<td> Modelo </td>"+
              "<td> Accion </td>"+
              +"</tr></thead>");
            $.each(data, function (index, value) {           
                $("#equipounidads-table").append("<tbody><tr>"+
                "<td>"+ value.nombre +"</td>"+
                "<td>"+ value.mac +"</td>"+
                "<td>"+ value.numero_activo +"</td>"+
                "<td>"+ value.modelo +"</td>"+
                "<td>"+ "<div class='btn-group'>"+
                  "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                  "<i class='glyphicon glyphicon-edit'></i> Cambiar de Unidad</a>"+
                  "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                  "<i class='glyphicon glyphicon-edit'></i> Cambiar estado</a>"+
                "</div>"+ 
                "</td>"+
                "</tr></tbody>");
                })
      });
    });
  });
</script>
@endsection

