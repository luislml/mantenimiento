<div class="table-responsive">
    <table id="eInformaticos-table" class="table table-striped table-bordered" style="width:100%" >
        <thead>
            <tr>
                <th>ID</th>
                <th>EQUIPO</th>
                <th>NUMERO DE ACTIVO</th>
                <th>MODELO</th>
                <th>MARCA</th>
                <th>NUMERO DE SERIE</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eInformaticos as $eInformatico)
            <tr>
                <td>{!! $eInformatico->id !!}</td>
                <td>{!! $eInformatico->nombre !!}</td>
                <td>{!! $eInformatico->numero_activo !!}</td>
                <td>{!! $eInformatico->modelo !!}</td>
                <td>{!! $eInformatico->marca !!}</td>
                <td>{!! $eInformatico->numero_serie !!}</td>
                <td>
                    {!! Form::open(['route' => ['eInformaticos.destroy', $eInformatico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{!! route('eInformaticos.show', [$eInformatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a href="{!! route('eInformaticos.edit', [$eInformatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>-->

                        {!! Form::button('<i class="glyphicon glyphicon-trash">ELIMINAR</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro/a?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>EQUIPO</th>
                <th>NUMERO DE ACTIVO</th>
                <th>MODELO</th>
                <th>MARCA</th>
                <th>NUMERO DE SERIE</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#eInformaticos-table').DataTable({
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
