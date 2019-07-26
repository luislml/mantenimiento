@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recomendacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($recomendacion, ['route' => ['recomendacions.update', $recomendacion->id], 'method' => 'patch']) !!}

                        @include('recomendacions.fieldsedit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection