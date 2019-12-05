@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">MANTENIMIENTO</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" target="_blank" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('mantenimientos.show', [Auth::user()->id]) !!}"><i class="glyphicon glyphicon-eye-open"></i>MANTENIMIENTO REALIZADO</a>

           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('mantenimientos.create') !!}"><i class="fa fa-fw fa-plus"></i>AÑADIR NUEVO</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('mantenimientos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

