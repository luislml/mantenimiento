@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Historiale
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($historiale, ['route' => ['historiales.update', $historiale->id], 'method' => 'patch']) !!}

                        @include('historiales.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection