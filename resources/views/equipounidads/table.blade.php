<div class="table-responsive">
    <table class="table" id="equipounidads-table">
        <thead>
            <tr>
                <th>EQUIPO</th>
                <th>FUNCIONARIO</th>
                <th>UNIDAD</th>
                <th>AREA</th>
                <th>SUB AREA</th>
                <th>ESTADO</th>
                <th colspan="3">ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipou as $equipouds)
            <tr>
                <td> <a href="" data-toggle="modal" data-target="#{!! $equipouds->id !!}">{!! $equipouds->nombre !!}</a> </td><!-- Button trigger modal -->
                
<!-- Modal equipos -->
        <div class="modal fade" id="{!! $equipouds->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="box-body">
                <div class="row">

                    @if($equipouds->nombre == "CPU" | $equipouds->nombre == "LAPTOP")
                        <h4>EQUIPO: {!! $equipouds->nombre !!}</h4>
                        <h4>MARCA: {!! $equipouds->marca !!}</h4>
                        <h4>MODELO: {!! $equipouds->modelo !!}</h4>
                        <h4>CODIGO FIJO: {!! $equipouds->numero_activo !!}</h4>
                        <h4>MEMORIA RAM: {!! $equipouds->memoria_ram !!}</h4>
                        <h4>DISCO DURO: {!! $equipouds->disco_duro !!}</h4>
                        <h4>TARJETA DE VIDEO: {!! $equipouds->tarjeta_video !!}</h4>
                        <h4>SISTEMA OPERATIVO: {!! $equipouds->s_o !!}</h4>
                        <h4>PROCESADOR: {!! $equipouds->procesador !!}</h4>    
                        <h4>MAC ETHERNET: {!! $equipouds->mac_ethernet !!}</h4>
                        <h4>MAC INALAMBRICO: {!! $equipouds->mac_inalambrico !!}</h4>
                        <h4>DETALLE: {!! $equipouds->detalle !!}</h4>
                    @endif
                    @if($equipouds->nombre == "MOUSE")
                        <h4>EQUIPO: {!! $equipouds->nombre !!}</h4>
                        <h4>MARCA: {!! $equipouds->marca !!}</h4>
                        <h4>MODELO: {!! $equipouds->modelo !!}</h4>
                        <h4>NUMERO DE SERIE: {!! $equipouds->numero_serie !!}</h4>
                        <h4>DETALLE: {!! $equipouds->detalle !!}</h4>
                    @endif
                    @if($equipouds->nombre == "TELEFONO")
                        <h4>EQUIPO: {!! $equipouds->nombre !!}</h4>
                        <h4>MARCA: {!! $equipouds->marca !!}</h4>
                        <h4>MODELO: {!! $equipouds->modelo !!}</h4>
                        <h4>NUMERO DE SERIE: {!! $equipouds->numero_serie !!}</h4>
                        <h4>CODIGO FIJO: {!! $equipouds->numero_activo !!}</h4>    
                        <h4>MAC ETHERNET: {!! $equipouds->mac_ethernet !!}</h4>
                        <h4>DETALLE: {!! $equipouds->detalle !!}</h4>
                    @endif
                    @if($equipouds->nombre != "CPU" && $equipouds->nombre != "LAPTOP" && $equipouds->nombre != "MOUSE" && $equipouds->nombre != "TELEFONO" && $equipouds->nombre != "IMPRESORA" && $equipouds->nombre != "SCANNER")
                        <h4>EQUIPO: {!! $equipouds->nombre !!}</h4>
                        <h4>MARCA: {!! $equipouds->marca !!}</h4>
                        <h4>MODELO: {!! $equipouds->modelo !!}</h4>
                        <h4>NUMERO DE SERIE: {!! $equipouds->numero_serie !!}</h4>
                        <h4>CODIGO FIJO: {!! $equipouds->numero_activo !!}</h4>    
                        <h4>DETALLE: {!! $equipouds->detalle !!}</h4>
                    @endif
                    @if($equipouds->nombre == "IMPRESORA" | $equipouds->nombre == "SCANNER")
                        <h4>EQUIPO: {!! $equipouds->nombre !!}</h4>
                        <h4>MARCA: {!! $equipouds->marca !!}</h4>
                        <h4>MODELO: {!! $equipouds->modelo !!}</h4>
                        <h4>NUMERO DE SERIE: {!! $equipouds->numero_serie !!}</h4>
                        <h4>CODIGO FIJO: {!! $equipouds->numero_activo !!}</h4>    
                        <h4>TIPO DE IMPRESORA: {!! $equipouds->tipo_impresora !!}</h4>
                        <h4>DETALLE: {!! $equipouds->detalle !!}</h4>
                    @endif   
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

                <td>{!! $equipouds->usuario['nombre'] !!} {!! $equipouds->usuario['apellido'] !!}</td>
                <td>{!! $equipouds->unidad->nombre !!}</td>
                

                @if ($equipouds->area_id != null) 
                    <td>{!! $equipouds->area->nombre !!}</td>
                    @else
                    <td></td>
                @endif

                @if ($equipouds->sub_area_id != null) 
                    <td>{!! $equipouds->sub_area->nombre !!}</td>
                    @else
                    <td></td>
                @endif
                <td>{!! $equipouds->estado !!}</td>

                <td>
                    
                    <div class='btn-group'>
                        
                        <a href="{!! route('equipounidads.edit', [$equipouds->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>CAMBIO DE UNIDAD</a>
                        <a href="{!! route('equipounidads.editestado', [$equipouds->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>ESTADO</a>

                        <a href="{!! route('userequipos.show', [$equipouds->id]) !!}" class='btn btn-default btn-xs' target="_blank"><i class="glyphicon glyphicon-eye-open"></i>IMPRIMIR CODIGO QR</a>
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


