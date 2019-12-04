@extends('layouts.app')

@section('content')
    <script>
      function upperCaseF(a){
        setTimeout(function(){
            a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>
    <section class="content-header">
        <h1>
            DRIVERS
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'herramientas.store', 'files' => true]) !!}

                        @include('herramientas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
