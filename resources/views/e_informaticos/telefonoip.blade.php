
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

 {!! Form::hidden('nombre', null, ['class' => 'form-control' , 'id' => 'equipo_t']) !!}

<div class="form-group col-sm-12">
    <!-- detalle Field -->
    <div class="col-lg-6">
        {!! Form::label('detalle', 'DETALLE:') !!}
        {!! Form::textarea('detalle', null, ['class' => 'form-control','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 -->
    <!-- direccopn mac Field -->
    <div class="col-lg-6">
        {!! Form::label('direccion_mac', 'DIRECCION MAC:') !!}
        {!! Form::text('mac_ethernet', null, ['class' => 'form-control','id'=>'mac_ethernet_t','onkeydown'=>'upperCaseF(this)']) !!}
    </div><!-- /.col-lg-6 --> 
</div><!-- /.row -->

<!-- Unidad Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE UNIDAD:</label>
      <select name="unidad_id" id="unidadt" class="form-control">
         <option value="">-- SELECCIONE UNIDAD --</option>
         @foreach ($unidad as $unidads)
            <option value="{{$unidads->id}}">{{$unidads->nombre}}</option>
         @endforeach
      </select>
</div>
<!-- area Id Field -->                    
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE AREA:</label>
      <select name="area_id" id="areat" class="form-control">
           <option value="">-- SELECCIONE AREA --</option>
       </select>
</div>
<!-- sub area Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE SUB AREA:</label>
      <select name="sub_area_id" id="subareat" class="form-control">
           <option value="">-- SELECCIONE SUB AREA --</option>
       </select>
</div>
<!-- Usuario Id Field -->
<div class="col-md-3">
   <label for="" class="control-label">SELECCIONE USUARIO:</label>
      <select name="usuario_id" id="usuario_idt" class="form-control">
           <option value="">-- SELECCIONE USUARIO --</option>
       </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eInformaticos.index') !!}" class="btn btn-default">CANCELAR</a>
</div>

<script type="text/javascript">
$(document).ready(function () {
    $("#mac_ethernet").mask("(99)9999-9999")
    
})
</script>


