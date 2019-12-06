<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LISTA DE EQUIPOS</title>
    <div class="row">
      <div class="col-xs-12">
        <h3 class="page-header">
          LISTA DE EQUIPOS 
        </h3>
        <h4>
          UNIDAD:
          {{ $unidad->nombre }} 
        </h4>
        <h4>
          AREA:
          {{ $area->nombre }}
        </h4>
      </div>
    </div>

  <style>
    table, tr, td, thead, tr , th{ border: 1px solid black; text-align: center; top: -100px;}
    th { background-color: #DCDCDC; }
    @page { margin: 100px 25px; }
    header { position: fixed; top: -100px; left: 0px; right: 0px; height: 50px; }
    footer { padding-top: -50px; position: fixed; bottom: -100px; left: 0px; right: 0px; height: 50px; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }
    body {  padding-top: 50px; padding-bottom: -30px;}
  </style>
</head>
<body>
  <header><br><br>
    <img src={{asset('img/LOGOUNIDAD.png')}} width="90" align="left">
        <img src={{asset('img/LogoSedes2019-Oficial-peq.png')}} width="90" align="right">    
            <p align="center">
            Servicio Departametal de Salud Potosi <br>   
            Unidad de Planificacion y Proyectos <br>    
            Area de Informatica y Telecomunicaciones
            </p>  
            
            

  </header>
  <body>
    <table width="100%">
           <thead> 
            <tr>      
                <th>EQUIPO</th> 
                @if($soloinfo==null)
                  <th>QR</th>
                @endif
            </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            <tr>
                <td>
              @if($equipo->nombre == "CPU" | $equipo->nombre == "LAPTOP")
                
                        EQUIPO: {!! $equipo->nombre !!}<br>
                        MARCA: {!! $equipo->marca !!}<br>
                        MODELO: {!! $equipo->modelo !!}<br>
                        CODIGO FIJO: {!! $equipo->numero_activo !!}<br>
                        MEMORIA RAM: {!! $equipo->memoria_ram !!}<br>
                        DISCO DURO: {!! $equipo->disco_duro !!}<br>
                        TARJETA DE VIDEO: {!! $equipo->tarjeta_video !!}<br>
                        SISTEMA OPERATIVO: {!! $equipo->s_o !!}<br>
                        PROCESADOR: {!! $equipo->procesador !!}<br>   
                        MAC ETHERNET: {!! $equipo->mac_ethernet !!}<br>
                        MAC INALAMBRICO: {!! $equipo->mac_inalambrico !!}<br>
                        DETALLE: {!! $equipo->detalle !!}<br>
                
              @endif
              @if($equipo->nombre=="MOUSE")
                
                        EQUIPO: {!! $equipo->nombre !!}<br>
                        MARCA: {!! $equipo->marca !!}<br>
                        MODELO: {!! $equipo->modelo !!}<br>
                        NUMERO DE SERIE: {!! $equipo->numero_serie !!}<br>
                        DETALLE: {!! $equipo->detalle !!}<br>
                
              @endif
              @if($equipo->nombre=="TELEFONO")
                
                        EQUIPO: {!! $equipo->nombre !!}<br>
                        MARCA: {!! $equipo->marca !!}<br>
                        MODELO: {!! $equipo->modelo !!}<br>
                        NUMERO DE SERIE: {!! $equipo->numero_serie !!}<br>
                        CODIGO FIJO: {!! $equipo->numero_activo !!}<br>  
                        MAC ETHERNET: {!! $equipo->mac_ethernet !!}<br>
                        DETALLE: {!! $equipo->detalle !!}<br>
                
              @endif
              @if($equipo->nombre == "IMPRESORA" | $equipo->nombre == "SCANNER")
                
                        EQUIPO: {!! $equipo->nombre !!}<br>
                        MARCA: {!! $equipo->marca !!}<br>
                        MODELO: {!! $equipo->modelo !!}<br>
                        NUMERO DE SERIE: {!! $equipo->numero_serie !!}<br>
                        CODIGO FIJO: {!! $equipo->numero_activo !!}<br>    
                        TIPO DE IMPRESORA: {!! $equipo->tipo_impresora !!}<br>
                        DETALLE: {!! $equipo->detalle !!}<br>
                
              @endif
              @if($equipo->nombre != "CPU" && $equipo->nombre != "LAPTOP" && $equipo->nombre != "MOUSE" && $equipo->nombre != "TELEFONO" && $equipo->nombre != "IMPRESORA" && $equipo->nombre != "SCANNER")
                
                        EQUIPO: {!! $equipo->nombre !!}<br>
                        MARCA: {!! $equipo->marca !!}<br>
                        MODELO: {!! $equipo->modelo !!}<br>
                        NUMERO DE SERIE: {!! $equipo->numero_serie !!}<br>
                        CODIGO FIJO: {!! $equipo->numero_activo !!}<br>    
                        DETALLE: {!! $equipo->detalle !!}<br>
                
              @endif
              </td>
              <input type="hidden" {{ $nombre = $equipo->usuario->nombre }}>
              <input type="hidden" {{ $apellido = $equipo->usuario->apellido }}>
              <input type="hidden" {{ $unidad = $equipo->unidad['nombre'] }}>
                @if($soloinfo==null)
                <td> 
                  <img src="data:image/png;base64, {!!base64_encode(QrCode::format('png')->size(200)->margin(1)->generate("NOMBRE:$nombre $apellido | EQUIPO:$equipo->nombre | ACTIVO:$equipo->numero_activo | MARCA:$equipo->marca | MODELO:$equipo->modelo | UNIDAD:$unidad"))!!}">
                  
                </td>
              @endif
            </tr>
        @endforeach
        </tbody>
    </table>
  </body>
    <footer class="main-footer" style="max-height: 100px;text-align: center">
        <strong>Copyright © 2019 <a href="#">S.E.D.E.S.</a></strong> Todos los derechos reservados.
    </footer>
</html>