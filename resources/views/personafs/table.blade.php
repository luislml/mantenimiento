<div class="table-responsive">
    <table id="personafs-table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Area</th>
                <th>Subarea</th>
                <th>Estado</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personafs as $personaf)
            <tr>
                
                <td>{!! $personaf->nombre !!} {!! $personaf->apellido !!}</td>
                
                <td>{!! $personaf->unidad->nombre !!}</td>

                @if ($personaf->area_id != null) 
                    <td>{!! $personaf->area->nombre !!}</td>
                    @else
                    <td></td>
                @endif

                @if ($personaf->sub_area_id != null) 
                    <td>{!! $personaf->sub_area->nombre !!}</td>
                    @else
                    <td></td>
                @endif
                <td>{!! $personaf->estado !!}</td>
                
                <td>
                    {!! Form::open(['route' => ['personafs.destroy', $personaf->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{!! route('personafs.edit', [$personaf->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>editar</a>
                        <a href="{!! route('personafs.editestado', [$personaf->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>editarestado</a>
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Area</th>
                <th>Subarea</th>
                <th>Estado</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#personafs-table').DataTable({
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
