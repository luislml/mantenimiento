<div class="table-responsive">
    <table class="table" id="personafs-table">
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
        @foreach($personafs as $personaf)
            <tr>
                
                <td>{!! $personaf->nombre !!}</td>
                
                <td>{!! $personaf->unidad->nombre !!}</td>

                @if ($personaf->area_id != null) 
                    <td>{!! $personaf->area->nombre !!}</td>
                    @else
                    <td></td>
                @endif

                @if ($personaf->sub_area_id != null) 
                    <td>{!! $personaf->sub_area->nombre !!}</td>
                    @else
                    <td></td>
                @endif
                <td>{!! $personaf->estado !!}</td>
                
                <td>
                    {!! Form::open(['route' => ['personafs.destroy', $personaf->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{!! route('personafs.edit', [$personaf->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>editar</a>
                        <a href="{!! route('personafs.editestado', [$personaf->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>editarestado</a>
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
