<div class="table-responsive">
    <table class="table" id="unidads-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($unidads as $unidad)
            <tr>
                <td>{!! $unidad->nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['unidads.destroy', $unidad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('unidads.show', [$unidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a href="{!! route('unidads.edit', [$unidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                        
                        <a href="{!! route('areass.indexx', [$unidad->id]) !!}"><i class="btn btn-default">Areas</i></a>
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
