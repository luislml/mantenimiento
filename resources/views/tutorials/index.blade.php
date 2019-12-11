@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">TUTORIALES</h1>
        <h1 class="pull-right">
           
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">

            <div class="box-body">    
                    <h4>CONTROL DE USUARIOS</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/CONTROL DE USUARIOS.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>

            <div class="box-body">    
                    <h4>PERSONAL</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/PERSONAL.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
            <div class="box-body">    
                    <h4>EQUIPOS INFORMATICOS</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/EQUIPOS INFORMATICOS.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
            <div class="box-body">    
                    <h4>AREAS DE TRABAJO</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/AREAS DE TRABAJO.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
            <div class="box-body">    
                    <h4>MANTENIMIENTO</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/MANTENIMIENTO.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
            <div class="box-body">    
                    <h4>CITES</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/CITES.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
            <div class="box-body">    
                    <h4>CRONOGRAMAS</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/CRONOGRAMAS.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
            <div class="box-body">    
                    <h4>HERRAMIENTAS</h4>
                    <div>
                        <video width="620" height="360" controls>
                      <source src="tutorial/HERRAMIENTAS.mp4" type="video/mp4">
                    </video>
                    </div>        
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

