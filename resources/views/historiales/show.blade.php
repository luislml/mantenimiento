
<html>
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <header><br><br>
    <img src={{asset('img/LOGOUNIDAD.png')}} width="90" align="left">
        <img src={{asset('img/LogoSedes2019-Oficial-peq.png')}} width="90" align="right">
        <h4 align="center">HISTORIAL</h4>
          
        <br><br>

  </header>
              
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <br>
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            EQUIPO
            <address>
              <strong>{!! $eactual->nombre !!}</strong><br>
              NUMERO DE ACTIVO: {!! $eactual->numero_activo !!}<br>
              MODELO: {!! $eactual->modelo !!}<br>
              MARCA: {!! $eactual->marca !!}<br>
              
            </address>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <br>

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table width="100%" class="table table-striped">
              <thead>
                <tr>
                  <th>FUNCIONARIO</th>
                  <th>UNIDAD</th>
                  <th>AREA</th>
                  <th>SUB AREA</th>
                  <th>FECHA</th>
                </tr>
              </thead>
              
                <tbody>
        @foreach($historiales as $historiale)
            <tr>
                <td>
                    @foreach($usuario as $usuarios)
                        @if($historiale->usuario_id == $usuarios->id)
                            <p>{!! $usuarios->nombre !!} {!! $usuarios->apellido !!}</p>
                        @endif
                    @endforeach  
                </td>
                
                <td>
                    @foreach($unidad as $unidades)
                        @if($unidades->id == $historiale->unidad_id)
                            {!! $unidades->nombre !!}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($area as $areas)
                        @if($areas->id == $historiale->area_id)
                            {!! $areas->nombre !!}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($subarea as $subareas)
                        @if($subareas->id == $historiale->sub_area_id)
                            {!! $subareas->nombre !!}
                        @endif
                    @endforeach
                </td>
                <td>   
                    {!! $historiale->created_at !!}      
                </td>
            </tr>
        @endforeach
        </tbody>
              
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    
  </body>
</html>
