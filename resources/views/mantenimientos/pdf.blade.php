<html>
<head>
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
        <h3 align="center">PLANILLA DE MANTENIMIENTO</h3>
        <h4 align="center">Nombre Tecnico: {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h4>  
        <br><br>

  </header>
  <body>
    <table width="100%">
           <thead> 
            <tr>      
                <th width="10%">Fecha</th>
                <th width="43%">Descripcion</th>
                <th width="25%">Funcionario</th>
                <th width="22%">Unidad</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mantenimientos as $mantenimiento)
            <tr>
                <td width="10%">{!! $mantenimiento->fecha->todateString() !!}</td>
                <td width="43%" align="">{!! $mantenimiento->descripcion !!}</td>
                <td width="25%">{!! $mantenimiento->equipos->usuario->nombre !!}
                    {!! $mantenimiento->equipos->usuario->apellido !!}</td>
                <td width="22%">{!! $mantenimiento->equipos->unidad->nombre !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </body>
    <footer class="main-footer" style="max-height: 100px;text-align: center">
        <strong>Copyright © 2019 <a href="#">S.E.D.E.S.</a></strong> Todos los derechos reservados.
    </footer>
</html>



