<div class="table-responsive">
    <table id="subAreas-table" class="table table-striped table-bordered" style="width:100%" >
        <thead>
            <tr>
                <th>SUB AREA</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subAreas as $subArea)
            <tr>
            @if($area->id == $subArea->area_id)
            <td>{!! $subArea->nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['subAreas.destroy', $subArea->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--<a href="{!! route('subAreas.show', [$subArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>-->
                        <a href="{!! route('subAreas.edit', [$subArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>SUB AREA</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#subAreas-table').DataTable({
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
