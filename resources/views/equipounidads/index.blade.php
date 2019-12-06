@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1 class="pull-left">EQUIPOS ASIGNADOS</h1>
        
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')


        <div class="clearfix"></div>
        {!! Form::open(['route' => 'equipounidads.print', 'target'=>'_blank']) !!}
        <div class="box box-primary">
            <div class="box-body">
              
                <div class="col-md-3">
                   <label for="" class="control-label">SELECCIONE UNIDAD:</label>
                      <select name="unidad_id" id="unidad" class="form-control">
                         <option value="">SELECCIONE UNIDAD</option>
                         @foreach ($unidad as $unidads)
                            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
                         @endforeach
                      </select>
                </div>
                                            
                <div class="col-md-3">
                   <label for="" class="control-label">SELECCIONE AREA:</label>
                      <select name="area_id" id="area" class="form-control">
                           <option value="">SELECCIONE AREA</option>
                       </select>
                </div>

                <div class="col-md-3">
                   <label for="" class="control-label">SELECCIONE SUB AREA:</label>
                      <select name="sub_area_id" id="subarea" class="form-control">
                           <option value="">SELECCIONE SUB AREA</option>
                       </select>
                </div>
                <!-- Usuario Id Field -->
                <div class="col-md-3">
                   <label for="" class="control-label">SELECCIONE USUARIO:</label>
                      <select name="usuario_id" id="usuario_id" class="form-control">
                           <option value="">SELECCIONE USUARIO</option>
                       </select>
                </div>
                
                
                <br>
                <br>
                <br>
                <br>
                    @include('equipounidads.table')
            </div>
        </div>
        <label for="" class="control-label">INFORMACION</label>
          <input type="checkbox" name="soloinfo" value="si">
          {!! Form::submit('IMPRIMIR', ['class' => 'btn btn-primary']) !!}
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
                $('#area').append("<option value=''>SELECCIONE AREA</option>");

            $.each(data, function (index, value) {
             
                    $('#area').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });
      $.get('userequipos/getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion  
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>SELECCIONE USUARIO</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });

      $.get('equipounidads/get_equipos/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion      
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> EQUIPO </td>"+
              "<td> ESTADO </td>"+
              "<td> ACCION </td>"+
              +"</tr></thead>");              
            $.each(data, function (index, value) {                    
            $("#equipounidads-table").append("<tbody><tr>"+
              "<td><a href='' data-toggle='modal' data-target='#"+value.id+"'>"+value.nombre+"</a></td>"+
              "<td>"+ value.estado +"</td>"+
              "<td>"+ "<div class='btn-group'>"+
                "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> CAMBIO DE UNIDAD</a>"+
                "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> ESTADO</a>"+
                "<a target='_blank' href='historiales/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR HISTORIAL DE ASIGNACION </a>"+
                "<a target='_blank' href='userequipos/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR CODIGO QR </a>"+
                "<a target='_blank' href='userequipos/hmantenimiento/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR HISTORIAL DE MANTENIMIENTO </a>"+
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
                $('#subarea').append("<option value=''>SELECCIONE SUB AREA</option>");

            $.each(data, function (index, value) {
             
                    $('#subarea').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });
      $.get('userequipos/getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>SELECCIONE USUARIO</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
      //llenado de la tabla con los equipos de area
      $.get('equipounidads/getequipos_a/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion      
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> EQUIPO </td>"+
              "<td> ESTADO </td>"+
              "<td> ACCION </td>"+
              +"</tr></thead>");              
            $.each(data, function (index, value) {                    
            $("#equipounidads-table").append("<tbody><tr>"+
              "<td><a href='' data-toggle='modal' data-target='#"+value.id+"'>"+value.nombre+"</a></td>"+
              "<td>"+ value.estado +"</td>"+
              "<td>"+ "<div class='btn-group'>"+
                "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> CAMBIO DE UNIDAD</a>"+
                "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> ESTADO </a>"+
                "<a target='_blank' href='historiales/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR HISTORIAL DE ASIGNACION</a>"+
                "<a target='_blank' href='userequipos/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR CODIGO QR </a>"+
                "<a target='_blank' href='userequipos/hmantenimiento/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR HISTORIAL DE MANTENIMIENTO </a>"+
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
                $('#usuario_id').append("<option value=''>SELECCIONE USUARIO</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
      //cargando la tabla con los equipos de sub area
    $.get('equipounidads/getequipos_sa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion      
        console.log(data);
          $('#equipounidads-table').empty();
              $("#equipounidads-table").append("<thead><tr>"+
              "<td> EQUIPO </td>"+
              "<td> ESTADO </td>"+
              "<td> ACCION </td>"+
              +"</tr></thead>");              
            $.each(data, function (index, value) {                    
            $("#equipounidads-table").append("<tbody><tr>"+
              "<td><a href='' data-toggle='modal' data-target='#"+value.id+"'>"+value.nombre+"</a></td>"+
              "<td>"+ value.estado +"</td>"+
              "<td>"+ "<div class='btn-group'>"+
                "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> CAMBIO DE UNIDAD </a>"+
                "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> ESTADO </a>"+
                "<a target='_blank' href='historiales/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> IMPRIMIR HISTORIAL DE ASIGNACION </a>"+
                "<a target='_blank' href='userequipos/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR CODIGO QR </a>"+
                "<a target='_blank' href='userequipos/hmantenimiento/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR HISTORIAL DE MANTENIMIENTO </a>"+
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
              "<td> EQUIPO </td>"+
              "<td> ESTADO </td>"+
              "<td> ACCION </td>"+
              +"</tr></thead>");
            $.each(data, function (index, value) {           
                $("#equipounidads-table").append("<tbody><tr>"+
                "<td><a href='' data-toggle='modal' data-target='#"+value.id+"'>"+ value.nombre +"</a></td>"+
                "<td>"+ value.estado +"</td>"+
                "<td>"+ "<div class='btn-group'>"+
                  "<a href='equipounidads/"+ value.id +"/edit' class='btn btn-default btn-xs'>"+
                  "<i class='glyphicon glyphicon-edit'></i> CAMBIO DE UNIDAD </a>"+
                  "<a href='equipounidads/"+ value.id +"/editestado' class='btn btn-default btn-xs'>"+
                  "<i class='glyphicon glyphicon-edit'></i> ESTADO </a>"+
                "<a target='_blank' href='historiales/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i> IMPRIMIR HISTORIAL DE ASIGNACION </a>"+
                "<a target='_blank' href='userequipos/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR CODIGO QR </a>"+
                "<a target='_blank' href='userequipos/hmantenimiento/"+ value.id +"' class='btn btn-default btn-xs'>"+
                "<i class='glyphicon glyphicon-edit'></i>IMPRIMIR HISTORIAL DE MANTENIMIENTO </a>"+
                "</div>"+ 
                "</td>"+
                "</tr></tbody>");
                })
      });
    });
  });
</script>
<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection

