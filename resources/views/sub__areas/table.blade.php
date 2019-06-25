<div class="table-responsive">
    <table class="table" id="subAreas-table">
        <thead>
            <tr>
    
        <th>Nombre Sub Area</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subAreas as $subArea)
            <tr>
            @if($area->id == $subArea->area_id)
            <td>{!! $subArea->nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['subAreas.destroy', $subArea->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('subAreas.show', [$subArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('subAreas.edit', [$subArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
