@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actualizador
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actualizador, ['route' => ['actualizadors.update', $actualizador->id], 'method' => 'patch']) !!}

                        @include('actualizadors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection