<div class="table-responsive">
    <table class="table" id="equipos-table">
        <thead>
            <tr>
                <th>Tipo Equipo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            <tr>
                <td>{!! $equipo->tipo_equipo !!}</td>
                <td>
                    {!! Form::open(['route' => ['equipos.destroy', $equipo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('equipos.show', [$equipo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('equipos.edit', [$equipo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
