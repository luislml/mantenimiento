<div class="table-responsive">
    <table class="table" id="herramientas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>File</th>
                <th colspan="3">Action</th>
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
    </table>
</div>
