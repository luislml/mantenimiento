<div class="table-responsive">
    <table class="table" id="marcas-table">
        <thead>
            <tr>
                <th>Marca</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr>
                <td>{!! $marca->marca !!}</td>
                <td>
                    {!! Form::open(['route' => ['marcas.destroy', $marca->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('marcas.show', [$marca->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('marcas.edit', [$marca->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
