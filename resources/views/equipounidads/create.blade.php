@extends('layouts.app')

@section('content')
    
<section class="content-header">
        <h1>
            Asignar Usuario a : Unidad , Area , Sub Area
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'equipounidads.equipoupdate']) !!}

<div class="form-group col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <select name="id" class="form-control">
            <option value="">-- Seleccione Equipo --</option>
        @foreach($equipou as $equipos)
            
            <option value="{{ $equipos->id }}">Nombre: {!! $equipos->nombre !!} Mac: {!! $equipos->mac !!} Numero de activo: {!! $equipos->numero_activo !!}</option>
        @endforeach
    </select>
</div>

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

                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancel</a>
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
                $('#area').append("<option value=''>Selecciona Area</option>");

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
                $('#subarea').append("<option value=''>Selecciona Sub Area</option>");

            $.each(data, function (index, value) {
             
                    $('#subarea').append("<option value='" + value.id + "'>" + value.nombre +"</option>");
                })

      });
    });
  });
</script>
@endsection

