<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EQUIPO</title>
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
                <th>Equipo</th> 
                <th>QR</th>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <td>
                  
                    FUNCIONARIO(A): {!! $usuario->nombre !!}{!! $usuario->apellido !!}<br>
                  EQUIPO :{!! $userequipo->nombre !!} <br>
                    NUMERO DE ACTIVO: {!! $userequipo->numero_activo !!} <br>
                    MARCA: {!! $userequipo->marca !!}<br>
                    MODELO: {!! $userequipo->modelo!!}

                </td>
                <td> 
                  
                  <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate("NOMBRE:$usuario->nombre $usuario->apellido | EQUIPO:$userequipo->nombre | MARCA:$userequipo->marca | MODELO:$userequipo->modelo | UNIDAD:$unidad->nombre")) !!} "> 
                  
                </td>
            </tr>
        
        </tbody>
    </table>
  </body>
    <footer class="main-footer" style="max-height: 100px;text-align: center">
        <strong>Copyright © 2019 <a href="#">S.E.D.E.S.</a></strong> Todos los derechos reservados.
    </footer>
</html>



