<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width:100%" id="herramientas-table">
        <thead>
            <tr>
                <th>HERRAMIENTA</th>
                <th>FILE</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($herramientas as $herramientas)
            <tr>
                <td>{!! $herramientas->nombre !!}</td>
            <td>{!! $herramientas->file !!}</td>
                <td>
                    {!! Form::open(['route' => ['herramientas.destroy', $herramientas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('herramientas.show', [$herramientas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a href="{!! route('herramientas.edit', [$herramientas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="descargar_publicacion/<?=  $herramientas->id;   ?>"  ><button class="btn  btn-success btn-xs">Descargar</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>HERRAMIENTA</th>
                <th>FILE</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#herramientas-table').DataTable({
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
