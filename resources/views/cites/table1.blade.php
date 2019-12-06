<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width:100%" id="cites-table">
        <thead>
            <tr>
                <th>GESTION</th>
                <th>EQUIPO</th>
                <th>FUNCIONARIO</th>
                <th>UNIDAD</th>
                <th>CITE</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cites as $cite)
            <tr>
                <td>{!! $cite->gestion_id !!}</td>
            <td>{!! $cite->mantenimiento['equipos']['nombre'] !!}</td>
            <td>{!! $cite->mantenimiento['equipos']['usuario']['nombre'] !!} {!! $cite->mantenimiento['equipos']['usuario']['apellido'] !!}</td>
            <td>{!! $cite->mantenimiento['equipos']['unidad']['nombre'] !!}</td>
            <td>{!! $cite->cite !!}</td>
                <td>
                    {!! Form::open(['route' => ['cites.destroy', $cite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a target="_blank" href="{!! route('cites.show', [$cite->id]) !!}" class='btn btn-default btn-xs' ><i class="glyphicon glyphicon-eye-open"></i>IMPRIMIR</a>
                        <!--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}-->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>GESTION</th>
                <th>EQUIPO</th>
                <th>FUNCIONARIO</th>
                <th>UNIDAD</th>
                <th>CITE</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#cites-table').DataTable({
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
