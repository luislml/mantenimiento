<div class="table-responsive">
    <table class="table" id="recomendacions-table">
        <thead>
            <tr>
                <th>Recomendacion</th>
        <th>Cite Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
           


        @foreach($recomendacions as $recomendacion)
            @if($recomendacion->cite_id == $id)
         
            <tr>
                <td>{!! $recomendacion->recomendacion !!}</td>
            <td>{!! $recomendacion->cite_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['recomendacions.destroy', $recomendacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('recomendacions.edit', [$recomendacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
