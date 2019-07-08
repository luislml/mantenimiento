
@if(auth()->user()->hasRoles(['Admin']))
	<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>

@endif
@if(auth()->user()->hasRoles(['Admin','operador']))
	<li class="{{ Request::is('eInformaticos*') ? 'active' : '' }}">
    <a href="{!! route('eInformaticos.index') !!}"><i class="fa fa-edit"></i><span>E Informaticos</span></a>
</li>

@endif




<li class="{{ Request::is('unidads*') ? 'active' : '' }}">
    <a href="{!! route('unidads.index') !!}"><i class="fa fa-edit"></i><span>Unidads</span></a>
</li>

<li class="{{ Request::is('listarUas*') ? 'active' : '' }}">
    <a href="{!! route('listarUas.index') !!}"><i class="fa fa-edit"></i><span>Listar Uas</span></a>
</li>






<li class="{{ Request::is('personafs*') ? 'active' : '' }}">
    <a href="{!! route('personafs.index') !!}"><i class="fa fa-edit"></i><span>Personafs</span></a>
</li>



