@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            SUB AREA
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'subAreas.store']) !!}

                        @include('sub__areas.fields1')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
