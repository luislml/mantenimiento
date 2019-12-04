<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width:100%" id="programas-table">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>BITS</th>
                <th>ARCHIVO</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($programas as $programa)
            <tr>
                <td>{!! $programa->nombre !!}</td>
            <td>{!! $programa->bits !!}</td>
            <td>{!! $programa->archivo !!}</td>
                <td>
                    {!! Form::open(['route' => ['programas.destroy', $programa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{!! route('programas.show', [$programa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('programas.edit', [$programa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>-->
                        {!! Form::button('<i class="glyphicon glyphicon-trash">ELIMINAR.</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="descargar_programa/<?=  $programa->id;   ?>"  ><button class="btn  btn-success btn-xs">DESCARGAR</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>NOMBRE</th>
                <th>BITS</th>
                <th>ARCHIVO</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#programas-table').DataTable({
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