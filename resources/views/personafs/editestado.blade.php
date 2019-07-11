@extends('layouts.app')

@section('content')
    @inject('faculties', 'App\Services\Faculties')

    <section class="content-header">
        <h1>
            Usuario: {{ $personaf->nombre }}   
        </h1>
        <h1>
            Estado actual: {{ $personaf->estado }}
        </h1>
        
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                
                   {!! Form::model($personaf, ['route' => ['personafs.update', $personaf->id], 'method' => 'patch']) !!}

                        @include('personafs.fields2')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
