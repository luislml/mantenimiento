@extends('layouts.app')

@section('content')
    <script>
      function upperCaseF(a){
        setTimeout(function(){
            a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>
    <section class="content-header">
        <h1>Equipos Informaticos
        
    </h1>

        @include('flash::message')
        
<!-- Modal equipos -->
        <div class="modal fade" id="equipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.equipo']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('equipo', 'EQUIPO:') !!}
                           
                            <input type="text" name="tipo_equipo" class="form-control" onkeydown="upperCaseF(this)" >
                               
                        </div> 
                        <div class="form-group col-sm-12">
                            {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
              </div>
            </div>
          </div>
        </div>
<!-- Modal modelos -->
        <div class="modal fade" id="modelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.modelo']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('modelo', 'MODELO:') !!}
                            <input type="text" name="modelo" class="form-control" onkeydown="upperCaseF(this)" >    
                        </div> 
                        <div class="form-group col-sm-12">
                            {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
              </div>
              
            </div>
          </div>
        </div>
<!-- Modal marcas -->
        <div class="modal fade" id="marca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.marca']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('marca', 'MARCA:') !!} 
                            <input type="text" name="marca" class="form-control" onkeydown="upperCaseF(this)" >   
                        </div> 
                        <div class="form-group col-sm-12">
                            {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
              </div>
              
            </div>
          </div>
        </div>
<!-- Modal editar equipo -->
        <div class="modal fade" id="editarequipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SELECCIONE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    <div class="table-responsive">
                    <table id="eInformaticos-table" class="table table-striped table-bordered" style="width:100%" >
                        <thead>
                            <tr>
                                <th>Equipos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($equipos as $equipo)
                            <tr>
                                <td>{!! $equipo->tipo_equipo !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['equipos.destroy', $equipo->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro/a?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>  
                    </table>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- Modal editar modelo -->
        <div class="modal fade" id="editarmodelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SELECCIONE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    <div class="table-responsive">
                    <table id="eInformaticos-table" class="table table-striped table-bordered" style="width:100%" >
                        <thead>
                            <tr>
                                <th>Modelos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($modelos as $modelo)
                            <tr>
                                <td>{!! $modelo->modelo !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['modelos.destroy', $modelo->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro/a?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>  
                    </table>
                    </div>
                </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
<!-- Modal editar marca -->
        <div class="modal fade" id="editarmarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SELECCIONE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    <div class="table-responsive">
                    <table id="eInformaticos-table" class="table table-striped table-bordered" style="width:100%" >
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($marcas as $marca)
                            <tr>
                                <td>{!! $marca->marca !!}</td>
                                <td>
                                    {!! Form::open(['route' => ['marcas.destroy', $marca->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro/a?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>  
                    </table>
                    </div>
                </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
        
    </section>

    {!! Form::open(['route' => 'eInformaticos.store', 'id' => 'campos']) !!}

    <div class="box box-primary">
        <div class="input-group">   
        <select name="nombre" id="equipoi" class="form-control" onChange="mostrar(this.value);">
            <option value="">SELECCIONE</option>
            @foreach ($equipos as $equipo)
                <option value="{{$equipo->tipo_equipo}}">{{$equipo->tipo_equipo}}</option>
            @endforeach
        </select> 
        <span class="input-group-btn" >
            <a title="Agregar nuevo equipo" class="btn btn-default" data-toggle="modal" data-target="#equipo"><i class="fa fa-fw fa-plus-square"></i></a><!-- Button trigger modal -->
        </span>
        <span class="input-group-btn" >
            <a class="btn btn-danger" data-toggle="modal" data-target="#editarequipo"><i class="glyphicon glyphicon-trash"></i></a><!-- Button trigger modal -->
        </span>
        </div><!-- /input-group -->
    </div>

    
    <div id="CPU" class="content" style="display: none;" >
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.store', 'id' => 'campos']) !!}

                        @include('e_informaticos.equipoform')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div id="IMPRESORA" class="content" style="display: none;" >
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.store', 'id' => 'campos']) !!}

                        @include('e_informaticos.impresora_scanerform')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div id="PERIFERICOS" class="content" style="display: none;" >
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.store', 'id' => 'campos']) !!}

                        @include('e_informaticos.perifericos')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div id="TELEFONO" class="content" style="display: none;" >
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.store', 'id' => 'campos']) !!}

                        @include('e_informaticos.telefonoip')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div id="STANDART" class="content" style="display: none;" >
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.store', 'id' => 'campos']) !!}

                        @include('e_informaticos.formstandart')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script type="text/javascript">
function mostrar(id) {
    if (id == "CPU" | id == "LAPTOP") {
        $("#CPU").show();
        $("#IMPRESORA").hide();
        $("#PERIFERICOS").hide();
        $("#TELEFONO").hide();
        $("#STANDART").hide();
    } 
    else
        if (id == "IMPRESORA" | id == "SCANNER") {
            $("#CPU").hide();
            $("#IMPRESORA").show();
            $("#PERIFERICOS").hide();
            $("#TELEFONO").hide();
            $("#STANDART").hide();

        }
        else
            if (id == "PERIFERICOS") {
                $("#CPU").hide();
                $("#IMPRESORA").hide();
                $("#PERIFERICOS").show();
                $("#TELEFONO").hide();
                $("#STANDART").hide();

            }
            else
                if (id == "TELEFONO") {
                    $("#CPU").hide();
                    $("#IMPRESORA").hide();
                    $("#PERIFERICOS").hide();
                    $("#TELEFONO").show();
                    $("#STANDART").hide();

                }
                else
                    if (id != "CPU" && id != "IMPRESORA" && id != "PERIFERICOS" && id != "TELEFONO" ){
                        $("#CPU").hide();
                        $("#IMPRESORA").hide();
                        $("#PERIFERICOS").hide();
                        $("#TELEFONO").hide();
                        $("#STANDART").show();

                }
                
}

$(function(){
    $(document).on('change','#equipoi',function(){ //detectamos el evento change
        var value = $(this).val();//sacamos el valor del select
      $('#equipoid').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
      document.getElementById("equipoid").value = value ;
    });
  });

$(function(){
    $(document).on('change','#equipoi',function(){ //detectamos el evento change
        var value = $(this).val();//sacamos el valor del select
      $('#equipo_t').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
      document.getElementById("equipo_t").value = value ;
    });
  });
$(function(){
    $(document).on('change','#equipoi',function(){ //detectamos el evento change
        var value = $(this).val();//sacamos el valor del select
      $('#equipo_s').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
      document.getElementById("equipo_s").value = value ;
    });
  });

</script>
    <!--selects-->
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
    });
  });
</script>
 <!-------------------------------selects formulario standart----------------------------------->
<script>
  $(document).ready(function(){
    $("#unidads").change(function(){
      var categoria = $(this).val();
      $.get('getareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#areas').empty();
                $('#areas').append("<option value=''>-- SELECCIONE AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#areas').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_ids').empty();
                $('#usuario_ids').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_ids').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#areas").change(function(){
      var categoria = $(this).val();
      $.get('getsubareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#subareas').empty();
                $('#subareas').append("<option value=''>-- SELECCIONE SUB AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#subareas').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_ids').empty();
                $('#usuario_ids').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_ids').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#subareas").change(function(){
      var categoria = $(this).val();
            
      $.get('getusuariossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          $('#usuario_ids').empty();
                $('#usuario_ids').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_ids').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>

 <!-------------------------selects formulario impresora escanner------------------------------->
<script>
  $(document).ready(function(){
    $("#unidadim").change(function(){
      var categoria = $(this).val();
      $.get('getareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#areaim').empty();
                $('#areaim').append("<option value=''>-- SELECCIONE AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#areaim').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_idim').empty();
                $('#usuario_idim').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idim').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#areaim").change(function(){
      var categoria = $(this).val();
      $.get('getsubareaim/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#subareaim').empty();
                $('#subareaim').append("<option value=''>-- SELECCIONE SUB AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#subareaim').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_idim').empty();
                $('#usuario_idim').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idim').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#subareaim").change(function(){
      var categoria = $(this).val();
            
      $.get('getusuariossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          $('#usuario_idim').empty();
                $('#usuario_idim').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idim').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>

 <!-------------------------selects formulario perifericos------------------------------------>
<script>
  $(document).ready(function(){
    $("#unidadp").change(function(){
      var categoria = $(this).val();
      $.get('getareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#areap').empty();
                $('#areap').append("<option value=''>-- SELECCIONE AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#areap').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_idp').empty();
                $('#usuario_idp').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idp').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#areap").change(function(){
      var categoria = $(this).val();
      $.get('getsubareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#subareap').empty();
                $('#subareap').append("<option value=''>-- SELECCIONE SUB AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#subareap').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_idp').empty();
                $('#usuario_idp').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idp').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#subareap").change(function(){
      var categoria = $(this).val();
            
      $.get('getusuariossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          $('#usuario_idp').empty();
                $('#usuario_idp').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idp').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>

 <!-------------------------selects formulario telefono-------------------------------------->
<script>
  $(document).ready(function(){
    $("#unidadt").change(function(){
      var categoria = $(this).val();
      $.get('getareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion     
        console.log(data);
          $('#areat').empty();
                $('#areat').append("<option value=''>-- SELECCIONE AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#areat').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_idt').empty();
                $('#usuario_idt').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idt').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#areat").change(function(){
      var categoria = $(this).val();
      $.get('getsubareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#subareat').empty();
                $('#subareat').append("<option value=''>-- SELECCIONE SUB AREA --</option>");

            $.each(data, function (index, value) {
             
                    $('#subareat').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_idt').empty();
                $('#usuario_idt').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idt').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#subareat").change(function(){
      var categoria = $(this).val();
            
      $.get('getusuariossa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          $('#usuario_idt').empty();
                $('#usuario_idt').append("<option value=''>-- SELECCIONE USUARIO --</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_idt').append("<option value='" + value.id + "'>" + value.nombre +" "+ value.apellido +"</option>");
                })
      });
    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#mac_ethernet").mask("AA-AA-AA-AA-AA", {placeholder: "XX-XX-XX-XX-XX"});
    $("#mac_inalambrico").mask("AA-AA-AA-AA-AA");
    $("#s_o").mask("WINDOWS-A.A 00-BITS"); 
    $("#mac_ethernet_t").mask("AA-AA-AA-AA-AA", {placeholder: "XX-XX-XX-XX-XX"});
  });
</script>

@endsection