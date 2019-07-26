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
                   {!! Form::model($mantenimiento, ['route' => ['mantenimientos.update', $mantenimiento->id], 'method' => 'patch']) !!}

                        @include('mantenimientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection