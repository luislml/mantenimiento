@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cite
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cite, ['route' => ['cites.update', $cite->id], 'method' => 'patch']) !!}

                        @include('cites.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection