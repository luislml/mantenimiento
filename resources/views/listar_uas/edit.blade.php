@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Listar Uas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($listarUas, ['route' => ['listarUas.update', $listarUas->id], 'method' => 'patch']) !!}

                        @include('listar_uas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection