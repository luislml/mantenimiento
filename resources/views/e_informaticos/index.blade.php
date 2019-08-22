@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Equipos Informaticos</h1>
        <!--<h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('equipounidads.index') !!}"><i class="fa fa-fw fa-plus"></i>Listar Equipos Asignados</a>

            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('userequipos.create') !!}"><i class="fa fa-fw fa-share"></i>Asignar Equipo a Usuario</a>
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('equipounidads.equipoinsert') !!}"><i class="fa fa-fw fa-share"></i>Asignar Equipo a Unidad</a>



           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('eInformaticos.create') !!}"><i class="fa fa-fw fa-plus"></i>Añadir Nuevo</a>
           

        </h1>-->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('e_informaticos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

