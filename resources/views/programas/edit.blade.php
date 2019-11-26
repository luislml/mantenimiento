@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Programa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($programa, ['route' => ['programas.update', $programa->id], 'method' => 'patch']) !!}

                        @include('programas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection