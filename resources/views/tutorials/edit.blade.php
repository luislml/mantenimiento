@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tutorial
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tutorial, ['route' => ['tutorials.update', $tutorial->id], 'method' => 'patch']) !!}

                        @include('tutorials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection