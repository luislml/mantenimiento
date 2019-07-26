<div class="table-responsive">
    <table class="table" id="mantenimientos-table">
        <thead>
            <tr>
                
                <th>Fecha</th>
                <th>Descripcion</th>
                <th>Funcionario</th>
                <th>Unidad</th>

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mantenimientos as $mantenimiento)
            <tr>
                
                <td>{!! $mantenimiento->fecha->todateString() !!}</td>
                <td>{!! $mantenimiento->descripcion !!}</td>
                <td>{!! $mantenimiento->equipos->usuario->nombre !!}
                    {!! $mantenimiento->equipos->usuario->apellido !!}</td>
                <td>{!! $mantenimiento->equipos->unidad->nombre !!}</td>
            
                <td>
                    {!! Form::open(['route' => ['mantenimientos.destroy', $mantenimiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{!! route('mantenimientos.edit', [$mantenimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
