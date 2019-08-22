<div class="table-responsive">
    <table class="table" id="historiales-table">
        <thead>
            <tr>
                <th>Usuario Id</th>
        <th>E Informatico Id</th>
        <th>Unidad Id</th>
        <th>Area Id</th>
        <th>Sub Area Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($historiales as $historiale)
            <tr>
                <td>{!! $historiale->usuario_id !!}</td>
            <td>{!! $historiale->e_informatico_id !!}</td>
            <td>{!! $historiale->unidad_id !!}</td>
            <td>{!! $historiale->area_id !!}</td>
            <td>{!! $historiale->sub_area_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['historiales.destroy', $historiale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('historiales.show', [$historiale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('historiales.edit', [$historiale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
