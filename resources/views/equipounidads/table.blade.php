<div class="table-responsive">
    <table class="table" id="equipounidads-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Unidad</th>
        <th>Area</th>
        <th>Subarea</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipou as $equipouds)
            <tr>
                <td>{!! $equipouds->nombre !!}</td>
                
                <td>{!! $equipouds->unidad->nombre !!}</td>

                @if ($equipouds->area_id != null) 
                    <td>{!! $equipouds->area->nombre !!}</td>
                    @else
                    <td></td>
                @endif

                @if ($equipouds->sub_area_id != null) 
                    <td>{!! $equipouds->sub_area->nombre !!}</td>
                    @else
                    <td></td>
                @endif
                <td>{!! $equipouds->estado !!}</td>

                <td>
                    
                    <div class='btn-group'>
                        
                        <a href="{!! route('equipounidads.edit', [$equipouds->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>Cambiar de Unidad</a>
                        <a href="{!! route('equipounidads.editestado', [$equipouds->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>Cambiar estado</a>
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
