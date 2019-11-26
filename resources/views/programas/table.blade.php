<div class="table-responsive">
    <table class="table" id="programas-table">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>BITS</th>
                <th>ARCHIVO</th>
                <th colspan="3">ACCION</th>
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
                        <a href="{!! route('programas.show', [$programa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('programas.edit', [$programa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="descargar_programa/<?=  $programa->id;   ?>"  ><button class="btn  btn-success btn-xs">DESCARGAR</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
