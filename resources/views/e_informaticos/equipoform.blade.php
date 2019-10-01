<!-- tipo equipo Field -->
<div class="form-group col-sm-12">  
    <!-- s_o Field -->
    <div class="col-lg-6">
        {!! Form::label('s_o', 'SISTEMA OPERATIVO:') !!}
        {!! Form::text('s_o', null, ['class' => 'form-control','id'=>'s_o','onkeydown'=>'upperCaseF(this)','placeholder'=>'WINDOWS-FF 00-BITS']) !!}
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
        {!! Form::label('numero_activo', 'CODIGO FIJO:') !!}
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
        {!! Form::text('numero_serie', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="form-group col-sm-12">
    <!-- memoria ram Field -->
    <div class="col-lg-6">
        {!! Form::label('memoria ram', 'MEMORIA RAM:') !!}
        {!! Form::text('memoria_ram', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
    <!-- disco duro Field -->
    <div class="col-lg-6">
        {!! Form::label('disco duro', 'DISCO DURO:') !!}
        {!! Form::text('disco_duro', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="form-group col-sm-12">
    <!-- tarjeta de video Field -->
    <div class="col-lg-6">
        {!! Form::label('tarjeta de video', 'TARJETA DE VIDEO:') !!}
        {!! Form::text('tarjeta_video', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
    <!-- codigo fijo Field -->
    <div class="col-lg-6">
        {!! Form::label('codigo fijo', 'PROCESADOR:') !!}
        {!! Form::text('procesador', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="form-group col-sm-12">
    <!-- Mac ethernet Field -->
    <div class="col-lg-6">
        {!! Form::label('mac_ethernet', 'MAC ETHERNET:') !!}
        {!! Form::text('mac_ethernet', null, ['class' => 'form-control','id'=>'mac_ethernet','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
    <!-- mac inalambrica Field -->
    <div class="col-lg-6">
        {!! Form::label('mac_inalambrico', 'MAC INALAMBRICO:') !!}
        {!! Form::text('mac inalambrico', null, ['class' => 'form-control','id'=>'mac_inalambrico','placeholder'=>'XX-XX-XX-XX-XX','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="form-group col-sm-12">
    <!-- detalle Field -->
    <div class="col-lg-12">
        {!! Form::label('detalle', 'DETALLE:') !!}
        {!! Form::textarea('detalle', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
<!-- Unidad Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE UNIDAD:</label>
      <select name="unidad_id" id="unidad" class="form-control">
         <option value="">-- SELECCIONE UNIDAD --</option>
         @foreach ($unidad as $unidads)
            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
         @endforeach
      </select>
</div>
<!-- area Id Field -->                    
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE AREA:</label>
      <select name="area_id" id="area" class="form-control">
           <option value="">-- SELECCIONE AREA --</option>
       </select>
</div>
<!-- sub area Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE SUB AREA:</label>
      <select name="sub_area_id" id="subarea" class="form-control">
           <option value="">-- SELECCIONE SUB AREA --</option>
       </select>
</div>
<!-- Usuario Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE USUARIO:</label>
      <select name="usuario_id" id="usuario_id" class="form-control">
           <option value="">-- SELECCIONE USUARIO --</option>
       </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eInformaticos.index') !!}" class="btn btn-default">CANCELAR</a>
</div>






