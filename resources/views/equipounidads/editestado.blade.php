@extends('layouts.app')

@section('content')
    @inject('faculties', 'App\Services\Faculties')

    <section class="content-header">
        <h1>
            EQUIPO: {{ $equipou->nombre }}   
        </h1>
        <h1>
            ESTADO ACTUAL: {{ $equipou->estado }}
        </h1>
        
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                
                   {!! Form::model($equipou, ['route' => ['equipounidads.update', $equipou->id], 'method' => 'patch']) !!}

                        @include('equipounidads.fields2')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
