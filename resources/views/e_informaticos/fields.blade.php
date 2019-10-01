
<!-- tipo equipo Field -->
<div class="form-group col-sm-12">
    <div class="col-lg-6">
        {!! Form::label('nombre', 'EQUIPO:') !!}
        <div class="input-group">   
        <select name="nombre" id="equipoi" class="form-control" >
            <option value="">SELECCIONE</option>
            @foreach ($equipos as $equipo)
                <option value="{{$equipo->tipo_equipo}}">{{$equipo->tipo_equipo}}</option>
            @endforeach
        </select> 
        <span class="input-group-btn" >
            <a title="Agregar nuevo equipo" class="btn btn-default" data-toggle="modal" data-target="#equipo"><i class="fa fa-fw fa-plus-square"></i></a><!-- Button trigger modal -->
        </span>
        <span class="input-group-btn" >
            <a class="btn btn-danger" data-toggle="modal" data-target="#editarequipo"><i class="glyphicon glyphicon-trash"></i></a><!-- Button trigger modal -->
        </span>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
<!-- Mac Field -->
    <div class="col-lg-6">
        {!! Form::label('mac', 'MAC:') !!}
        {!! Form::text('mac', null, ['class' => 'form-control']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<!-- Modelo Field -->
<div class="form-group col-sm-12">
    <div class="col-lg-6">
        {!! Form::label('modelo', 'MODELO:') !!}
        <div class="input-group">
        <select name="modelo" class="form-control">
            <option value="">SELECCIONE</option>
            @foreach ($modelos as $modelo)
                <option value="{{$modelo->modelo}}">{{$modelo->modelo}}</option>
            @endforeach
        </select>  
        <span class="input-group-btn" >
            <a class="btn btn-default" data-toggle="modal" data-target="#modelo"><i class="fa fa-fw fa-plus-square"></i></a><!-- Button trigger modal -->
        </span>
        <span class="input-group-btn" >
            <a class="btn btn-danger" data-toggle="modal" data-target="#editarmodelo"><i class="glyphicon glyphicon-trash"></i></a><!-- Button trigger modal -->
        </span>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
<!-- Numero Activo Field -->
    <div class="col-lg-6">
        {!! Form::label('numero_activo', 'NUMERO DE ACTIVO:') !!}
        {!! Form::number('numero_activo', null, ['class' => 'form-control']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<!-- Marca Field -->
<div class="form-group col-sm-12">
    <div class="col-lg-6">
        {!! Form::label('marca', 'MARCA:') !!}
        <div class="input-group">
        <select name="marca" class="form-control">
            <option value="">SELECCIONE</option>
            @foreach ($marcas as $marca)
                <option value="{{$marca->marca}}">{{$marca->marca}}</option>
            @endforeach
        </select>    
        <span class="input-group-btn" >
            <a class="btn btn-default" data-toggle="modal" data-target="#marca"><i class="fa fa-fw fa-plus-square"></i></a><!-- Button trigger modal -->
        </span>
        <span class="input-group-btn" >
            <a class="btn btn-danger" data-toggle="modal" data-target="#editarmarca"><i class="glyphicon glyphicon-trash"></i></a><!-- Button trigger modal -->
        </span>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
<!-- Numero Serie Field -->
    <div class="col-lg-6">
        {!! Form::label('numero_serie', 'NUMERO DE SERIE:') !!}
        {!! Form::text('numero_serie', null, ['class' => 'form-control']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

    <div class="col-lg-6">
        {!! Form::label('ram') !!}
        {!! Form::text('rami', null, ['class' => 'form-control', 'id' => 'rami']) !!}
    </div><!-- /.col-lg-6 -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eInformaticos.index') !!}" class="btn btn-default">CANCELAR</a>
</div>


