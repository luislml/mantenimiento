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
        <h1>Equipos Informaticos</h1> 
        @include('flash::message')
        
<!-- Modal equipos -->
        <div class="modal fade" id="equipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Tipo de Equipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.equipo']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('equipo', 'Tipo de Equipo:') !!}
                           
                            <input type="text" name="tipo_equipo" class="form-control" onkeydown="upperCaseF(this)" >
                               
                        </div> 
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Agregar Modelo de Equipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.modelo']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('modelo', 'Modelo:') !!}
                            <input type="text" name="modelo" class="form-control" onkeydown="upperCaseF(this)" >    
                        </div> 
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Agregar Marca de Equipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.marca']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('marca', 'Marca:') !!} 
                            <input type="text" name="marca" class="form-control" onkeydown="upperCaseF(this)" >   
                        </div> 
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eInformaticos.store']) !!}

                        @include('e_informaticos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
