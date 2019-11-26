<div class="table-responsive">
    <table class="table" id="actualizadors-table">
        <thead>
            <tr>
                <th>FECHA</th>
                <th>BITS</th>
                <th>ACTUALIZADOR</th>
                <th colspan="3">ACCION</th>
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
                        <a href="{!! route('actualizadors.show', [$actualizador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('actualizadors.edit', [$actualizador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    <a href="descargar_actualizador/<?=  $actualizador->id;   ?>"  ><button class="btn  btn-success btn-xs">DESCARGAR</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
