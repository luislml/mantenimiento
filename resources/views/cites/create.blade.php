@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cite
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">{{ $id }}

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cites.store']) !!}

                        @include('cites.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
