@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            CITE
        </h1>
   </section>
   <script>
      function upperCaseF(a){
        setTimeout(function(){
            a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>
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