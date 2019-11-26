<div class="table-responsive">
    <table id="usuario" class="table table-striped table-bordered" style="width:100%" >
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>C.I.</th>
                <th>TELEFONO O CELL</th>
                <th>ROL</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                
                <td>{!! $usuario['nombre'] !!}</td>
                <td>{!! $usuario['apellido'] !!}</td>
                <td>{!! $usuario['ci'] !!}</td>
                <td>{!! $usuario['telefono'] !!}</td>
                <td>{!! $usuario['rol'] !!}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuario['id']], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('usuarios.edit', [$usuario['id']]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>ROL O EDITAR</a>
                        <a href="{!! route('personafs.edit', [$usuario['id']]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>ASIGNAR UNIDAD</a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro/a?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>C.I.</th>
                <th>TELEFONO O CELL</th>
                <th>ROL</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>
 
 

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#usuario').DataTable({
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
