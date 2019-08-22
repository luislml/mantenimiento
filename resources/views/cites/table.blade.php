<div class="table-responsive">
    <table class="table" id="cites-table">
        <thead>
            <tr>
                <th>Gestion</th>
                <th>Equipo</th>
                <th>funcionario</th>
                <th>Unidad</th>
                <th>Cite</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cites as $cite)
        @if($cite->gestion_id == $gestion->gestion)
       
        
            <tr>
                <td>{!! $cite->gestion_id !!}</td>
            <td>{!! $cite->mantenimiento['equipos']['nombre'] !!}</td>
            <td>{!! $cite->mantenimiento['equipos']['usuario']['nombre'] !!} {!! $cite->mantenimiento['equipos']['usuario']['apellido'] !!}</td>
            <td>{!! $cite->mantenimiento['equipos']['unidad']['nombre'] !!}</td>
            <td>{!! $cite->cite !!}</td>
                <td>
                    {!! Form::open(['route' => ['cites.destroy', $cite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{!! route('cites.edit', [$cite->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                       
                        <a href="{!! route('observacions.indexid', [$cite->id]) !!}" class='btn btn-default btn-xs'><i class="btn btn-default btn-xs"></i>Observacions</a>
                        <a href="{!! route('recomendacions.indexid', [$cite->id]) !!}" class='btn btn-default btn-xs'><i class="btn btn-default btn-xs"></i>Recomendacions</a>
                        <a target="_blank" href="{!! route('cites.show', [$cite->id]) !!}" class='btn btn-default btn-xs' ><i class="glyphicon glyphicon-eye-open"></i></a>
                        

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
