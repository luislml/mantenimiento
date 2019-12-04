<html>
<head>
  <style>
    table, tr, td, thead, tr , th{ border: 1px solid black; text-align: center; top: -100px;}
    th { background-color: #DCDCDC; }
    @page { margin: 100px 50px; }
    header { position: fixed; top: -100px; left: 0px; right: 0px; height: 50px; }
    footer { padding-top: -250px; position: fixed; bottom: -50px; left: 0px; right: 0px; height: 50px; }
    /*p { page-break-after: always; }
    p:last-child { page-break-after: never; }*/
    body {  padding-top: 25px; padding-bottom: -30px;}
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
    <h2 align="center">CRONOGRAMA</h2>
    <table width="100%">    
           <thead> 
            <tr>      
                <th width="70%">AREAS DE TRABAJO</th>
                <th width="30%">FECHA</th>
            </tr>
        </thead>
            <tbody>
            @foreach($events as $evento)
                <tr>
                    <td>{!! $evento->titulo !!}</td>
                    <td>
                        {!! $evento->fechaIni !!}
                        @if($evento->fechaFin!=null)
                             - {!! $evento->fechaFin !!}
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>
  </body>
<footer class="main-footer" style="max-height: 100px;text-align: center">
    <strong align="center">ING: {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</strong><br>
    <strong>AREA DE INFORMATICA Y TELECOMUNICACIONES</strong> <br><strong>SEDES POTOSI</strong>
</footer>
</html>



