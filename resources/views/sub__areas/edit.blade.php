@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sub  Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subArea, ['route' => ['subAreas.update', $subArea->id], 'method' => 'patch']) !!}

                        @include('sub__areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection