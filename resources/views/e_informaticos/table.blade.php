<div class="table-responsive">
    <table class="table" id="eInformaticos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Mac</th>
        <th>Numero Activo</th>
        <th>Modelo</th>
        <th>Numero Serie</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eInformaticos as $eInformatico)
            <tr>
                <td>{!! $eInformatico->nombre !!}</td>
            <td>{!! $eInformatico->mac !!}</td>
            <td>{!! $eInformatico->numero_activo !!}</td>
            <td>{!! $eInformatico->modelo !!}</td>
            <td>{!! $eInformatico->numero_serie !!}</td>
                <td>
                    {!! Form::open(['route' => ['eInformaticos.destroy', $eInformatico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('eInformaticos.show', [$eInformatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a href="{!! route('eInformaticos.edit', [$eInformatico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro/a?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
