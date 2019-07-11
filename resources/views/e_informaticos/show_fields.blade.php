<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $eInformatico->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $eInformatico->nombre !!}</p>
</div>

<!-- Mac Field -->
<div class="form-group">
    {!! Form::label('mac', 'Mac:') !!}
    <p>{!! $eInformatico->mac !!}</p>
</div>

<!-- Numero Activo Field -->
<div class="form-group">
    {!! Form::label('numero_activo', 'Numero Activo:') !!}
    <p>{!! $eInformatico->numero_activo !!}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{!! $eInformatico->modelo !!}</p>
</div>

<!-- Numero Serie Field -->
<div class="form-group">
    {!! Form::label('numero_serie', 'Numero Serie:') !!}
    <p>{!! $eInformatico->numero_serie !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $eInformatico->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $eInformatico->updated_at !!}</p>
</div>

<div class="form-group">
    <h4>QR code</h4>
    {!! QrCode::size(300)->generate(
        "
        nombre:$eInformatico->nombre, 
        mac:$eInformatico->mac, 
        modelo:$eInformatico->modelo,
        numero_activo:$eInformatico->numero_activo,
        numero_serie:$eInformatico->numero_serie
        "); !!}
    
</div>