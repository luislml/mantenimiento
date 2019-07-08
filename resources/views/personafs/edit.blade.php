@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personaf
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaf, ['route' => ['personafs.update', $personaf->id], 'method' => 'patch']) !!}

                        @include('personafs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection