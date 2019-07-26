<div class="table-responsive">
    <table class="table" id="observacions-table">
        <thead>
            <tr>
                <th>Observacion</th>
        <th>Cite Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($observacions as $observacion)
        @if($observacion->cite_id == $cite->id)
            <tr>
                <td>{!! $observacion->observacion !!}</td>
            <td>{!! $observacion->cite_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['observacions.destroy', $observacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('observacions.show', [$observacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('observacions.edit', [$observacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
