@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Userequipo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userequipo, ['route' => ['userequipos.update', $userequipo->id], 'method' => 'patch']) !!}

                        @include('userequipos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection