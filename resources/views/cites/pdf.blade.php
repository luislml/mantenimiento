<html>
<head>
  <style>
    table, tr, td, thead, tr , th{ border: 1px solid black; text-align: center; top: -100px;}
    th { background-color: #DCDCDC; }
    @page { margin: 100px 50px; }
    header { position: fixed; top: -100px; left: 0px; right: 0px; height: 50px; }
    footer { padding-top: -250px; position: fixed; bottom: -100px; left: 0px; right: 0px; height: 50px; }
    /*p { page-break-after: always; }
    p:last-child { page-break-after: never; }*/
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
        
       <br>
        <h2 align="center">INFORME TÉCNICO</h2>
        <h4 align="center">{{ $cite->gestion_id }} - {{ $cite->cite }} </h4>  
        <br><br>

  </header>
  <div> <br>    <br>    <br>    <br>    <br>    <br>    
        <h5> USUARIO: {{ $cite->mantenimiento['equipos']['usuario']['nombre'] }} {{ $cite->mantenimiento['equipos']['usuario']['apellido'] }}</h5>
        <h5> UNIDAD: {{ $cite->mantenimiento['equipos']['usuario']['unidad']['nombre'] }} </h5>
        <h5> CODIGO ACTIVO FIJO: {{ $cite->mantenimiento['equipos']['numero_activo'] }} </h5>
        <h5> EQUIPO: {{ $cite->mantenimiento['equipos']['nombre'] }} </h5> <br>
        <h5> TRABAJO REALIZADO: {{ $cite->mantenimiento['descripcion'] }} </h5>
        <h5> OBSERVACIONES: </h5>
        <ul>
        @foreach($cite->observacion as $observaciones)
                <li>{{ $observaciones->observacion }}</li>
        @endforeach
        </ul>
        <h5> RECOMENDACIONES: </h5>
        <ul>
        @foreach($cite->recomendacion as $recomendaciones)
                <li>{{ $recomendaciones->recomendacion }}</li>
        @endforeach
        </ul>
        <p>En cuanto se informa para fines del interesado</p>
        <p align="right">FECHA: {{ $cite->mantenimiento['fecha']->toFormattedDateString() }}</p>
        


  </div>
  <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>TECNICO AREA DE INFORMATICA Y TELECOMUNICACIONES</strong> <br><strong>SEDES POTOSI</strong>
        </footer>

  
    
  

    

</html>



