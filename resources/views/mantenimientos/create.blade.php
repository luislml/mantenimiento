@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mantenimiento
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                    <label for="" class="control-label">Seleccione Unidad</label>
                        <select name="unidad_id" id="unidad" class="form-control">
                            <option value="">Seleccione</option>
                             @foreach ($unidad as $unidads)
                                 <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
                             @endforeach
                        </select>
                    </div>
                            
                    <div class="col-md-4">
                    <label for="" class="control-label">Seleccione Area</label>
                        <select name="area_id" id="area" class="form-control">
                            <option value="">Seleccione area</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                    <label for="" class="control-label">Seleccione Sub Area</label>
                        <select name="sub_area_id" id="subarea" class="form-control">
                            <option value="">Seleccione sub area</option>
                         </select>
                    </div>

                    <div class="col-md-4">
                       <label for="" class="control-label">Seleccione usuario</label>
                          <select name="usuario_id" id="usuario_id" class="form-control">
                               <option value="">Seleccione usuario</option>
                           </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>


            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'mantenimientos.store']) !!}

                        @include('mantenimientos.fields')

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
                $('#area').append("<option value=''>Selecciona Area</option>");

            $.each(data, function (index, value) {
             
                    $('#area').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

      $.get('getusuarios/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>Selecciona usuario</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
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

      $.get('getusuariosa/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#usuario_id').empty();
                $('#usuario_id').append("<option value=''>Selecciona usuario</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
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
                $('#usuario_id').append("<option value=''>Selecciona usuario</option>");

            $.each(data, function (index, value) {
             
                    $('#usuario_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#usuario_id").change(function(){
      var categoria = $(this).val();
      $.get('getequipos/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#equipo_id').empty();
                $('#equipo_id').append("<option value=''>Selecciona equipo</option>");

            $.each(data, function (index, value) {
             
                    $('#equipo_id').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })
      });

    });
  });
</script>
@endsection

