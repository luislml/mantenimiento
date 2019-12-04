<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width:100%" id="mantenimientos-table">
        <thead>
            <tr>
                <th>ID</th> 
                <th>FECHA</th>
                <th>FUNCIONARIO</th>
                <th>UNIDAD</th>
                <th>EQUIPO</th>
                <th>CODIGO ACTIVO</th>
                <th>CITE</th>
                <th>DESCRIPCION</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mantenimientos as $mantenimiento)
            <tr>
                <td>{!! $mantenimiento->id !!}</td>
                <td>{!! $mantenimiento->fecha->todateString() !!}</td>
                <td>{!! $mantenimiento->equipos->usuario->nombre !!}
                    {!! $mantenimiento->equipos->usuario->apellido !!}</td>
                <td>{!! $mantenimiento->equipos->unidad->nombre !!}</td>
                <td>{!! $mantenimiento->equipos->nombre !!}</td>
                <td>{!! $mantenimiento->equipos->numero_activo !!}</td>
                <td>
                    @if($mantenimiento->cite==null)
                        no
                        @else
                        {!! $mantenimiento->cite->cite !!}
                    @endif
                    
                </td>
                <td><?php echo nl2br($mantenimiento->descripcion); ?></td>
                <td>
                    {!! Form::open(['route' => ['mantenimientos.destroy', $mantenimiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{!! route('mantenimientos.edit', [$mantenimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('mantenimientos.solocite', [$mantenimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit">GENERAR CITE</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr> 
                <th>ID</th>
                <th>FECHA</th>
                <th>FUNCIONARIO</th>
                <th>UNIDAD</th>
                <th>EQUIPO</th>
                <th>CODIGO ACTIVO</th>
                <th>CITE</th>
                <th>DESCRIPCION</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#mantenimientos-table').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        } );
    </script>
@endsection