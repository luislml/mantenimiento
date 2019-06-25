<div class="table-responsive">
    <table class="table" id="areas-table">
        <thead>
            <tr>
        <th>Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                @if($unidad->id == $area->unidad_id)
                        <td>{!! $area->nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('areas.show', [$area->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('areas.edit', [$area->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

                        <a href="{!! route('subAreass.indexx', [$area->id]) !!}"><i class="btn btn-default">Sub Areas</i></a>

                    </div>
                    {!! Form::close() !!}
                </td>
                @endif
                
            
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
