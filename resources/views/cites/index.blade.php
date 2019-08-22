@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Cites Gestion:{!! $gestion->gestion !!}</h1>
        <h1 class="pull-right">
            
           

            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('gestion.cerrar') !!}">Cerrar Gestion</a>

            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#gestion">Abrir gestion</a>
            <!-- Button trigger modal -->


<!-- Modal -->
        <div class="modal fade" id="gestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'gestion.update']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('gestion', 'Gestion:') !!}
                            <?php
                                $cont = date('Y');
                                $cont = $cont+5;
                            ?>
                            <select id="sel1" name="gestion" class="form-control">
                                <?php while ($cont >= 2015) { ?>
                                  <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                                <?php $cont = ($cont-1); } ?>
                            </select>
                        </div>
                        <input type="hidden" value="{!! $gestion->id !!}" name="id">
                        <input type="hidden" value="abierto" name="estado">
                        
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('cites.index') !!}" class="btn btn-default">Cancel</a>
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>


        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('cites.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

