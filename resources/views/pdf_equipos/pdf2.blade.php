<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Invoice</title>
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          LISTA DE EQUIPOS 
        </h2>
        <h3>
          UNIDAD:
          {{ $unidad->nombre }} 
        </h3>
        <h3>
          AREA:
          {{ $area->nombre }}
        </h3>
        <h3>
          SUB AREA:
          {{ $subarea->nombre }}
        </h3>
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
                <th width="10%">Equipo</th>
                <th width="43%">Numero de Activo</th>
                <th width="25%">Marca</th>
                <th width="22%">Modelo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            <tr>
                <td width="10%">{!! $equipo->nombre !!}</td>
                <td width="43%">{!! $equipo->numero_activo !!}</td>
                <td width="25%">{!! $equipo->marca !!}</td>
                <td width="22%">{!! $equipo->modelo!!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </body>
    <footer class="main-footer" style="max-height: 100px;text-align: center">
        <strong>Copyright © 2019 <a href="#">S.E.D.E.S.</a></strong> Todos los derechos reservados.
    </footer>
</html>