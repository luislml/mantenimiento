<div class="table-responsive">
    <table class="table" id="userequipos-table">
        <thead>
            <tr>
                <th>Usuario</th>
        <th>Equipo Informatico</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userequipos as $userequipo)
            <tr>
                <td>{!! $userequipo->usuario['nombre'] !!}</td>
            <td>{!! $userequipo->nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['userequipos.destroy', $userequipo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('userequipos.show', [$userequipo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('userequipos.edit', [$userequipo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
