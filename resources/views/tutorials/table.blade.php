<div class="table-responsive">
    <table class="table" id="tutorials-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tutorials as $tutorial)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['tutorials.destroy', $tutorial->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tutorials.show', [$tutorial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tutorials.edit', [$tutorial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
