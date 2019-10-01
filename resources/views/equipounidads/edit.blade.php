@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Equipo: {{ $equipounidad->nombre }}   
        </h1>
        <h1>
            Unidad actual: {{ $equipounidad->unidad->nombre }}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($equipounidad, ['route' => ['equipounidads.update', $equipounidad->id], 'method' => 'patch']) !!} 

                        @include('equipounidads.fields')

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
      
            
      $.get('areas/'+categoria, function(data){
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
              

      $.get('subareas/'+categoria, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        
        console.log(data);
          $('#subarea').empty();
                $('#subarea').append("<option value=''>Selecciona Sub Area</option>");

            $.each(data, function (index, value) {
             
                    $('#subarea').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })

      });
      $.get('getusuarios_a/'+categoria, function(data){
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
      $.get('getusuarios_sa/'+categoria, function(data){
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

@endsection
