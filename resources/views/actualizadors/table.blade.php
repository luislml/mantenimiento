<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width:100%" id="actualizador-table">
        <thead>
            <tr>
                <th>FECHA</th>
                <th>BITS</th>
                <th>ACTUALIZADOR</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($actualizadors as $actualizador)
            <tr>
                <td>{!! $actualizador->fecha !!}</td>
            <td>{!! $actualizador->bits !!}</td>
            <td>{!! $actualizador->actualizador !!}</td>
                <td>
                    {!! Form::open(['route' => ['actualizadors.destroy', $actualizador->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{!! route('actualizadors.show', [$actualizador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('actualizadors.edit', [$actualizador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>-->
                        {!! Form::button('<i class="glyphicon glyphicon-trash">ELIMINAR.</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="descargar_actualizador/<?=  $actualizador->id;   ?>"  ><button class="btn  btn-success btn-xs">DESCARGAR</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>FECHA</th>
                <th>BITS</th>
                <th>ACTUALIZADOR</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#actualizador-table').DataTable({
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
