
<!--@if(auth()->user()->hasRoles(['Admin']))
	<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-user "></i><span>Usuarios</span></a>
</li>
@endif-->
@if(auth()->user()->hasRoles(['Admin']))
    <li class="treeview">
        <a href="#">
            <i class="fa fa-user"></i> <span>Usuarios</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{!! route('usuarios.create') !!}"><i class="fa fa-plus"></i>Nuevo Usuario</a></li>
            <li><a href="{!! route('usuarios.index') !!}"><i class="fa fa-list-ol"></i>Listar Usuarios</a></li>
        </ul>
    </li>
@endif

<!--@if(auth()->user()->hasRoles(['Admin','operador']))
<li class="{{ Request::is('personafs*') ? 'active' : '' }}">
    <a href="{!! route('personafs.index') !!}"><i class="fa fa-male"></i><span>PERSONAL</span></a>
</li>
@endif-->

@if(auth()->user()->hasRoles(['Admin','operador']))
    <li class="treeview">
        <a href="#">
            <i class="fa fa-male"></i> <span>Personal</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{!! route('person.crea') !!}"><i class="fa fa-plus"></i>Nuevo Personal</a></li>
            <li><a href="{!! route('personafs.index') !!}"><i class="fa fa-list-ol"></i>Listar Personal</a></li>
        </ul>
    </li>
@endif

<!---@if(auth()->user()->hasRoles(['Admin','operador']))
	<li class="{{ Request::is('eInformaticos*') ? 'active' : '' }}">
    <a href="{!! route('eInformaticos.index') !!}"><i class="fa fa-desktop"></i><span>Equipos Informaticos</span></a>
</li>
@endif-->

@if(auth()->user()->hasRoles(['Admin','operador']))
    <li class="treeview">
        <a href="#">
            <i class="fa fa-desktop"></i> <span>Equipos Informaticos</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{!! route('eInformaticos.index') !!}"><i class="fa fa-laptop"></i>Equipos</a></li>
            <li><a href="{!! route('eInformaticos.create') !!}"><i class="fa fa-plus"></i>Nuevo Equipo</a></li>
            <li><a href="{!! route('equipounidads.equipoinsert') !!}"><i class="fa fa-share"></i>Asignar Equipo A Unidad</a></li>
            <li><a href="{!! route('userequipos.create') !!}"><i class="fa fa-share"></i>Asignar Equipo A Usuario</a></li>
            <li><a href="{!! route('equipounidads.index') !!}"><i class="fa fa-list-ol"></i>Listar Equipos Asignados</a></li>
        </ul>
    </li>
@endif



@if(auth()->user()->hasRoles(['Admin','operador']))
<li class="{{ Request::is('unidads*') ? 'active' : '' }}">
    <a href="{!! route('unidads.index') !!}"><i class="fa fa-sitemap"></i><span>Unidades</span></a>
</li>
@endif






<!--
@if(auth()->user()->hasRoles(['Admin','operador']))
<li class="{{ Request::is('equipounidads*') ? 'active' : '' }}">
    <a href="{!! route('equipounidads.index') !!}"><i class="fa fa-desktop"></i><i class="fa fa-sitemap"></i><span>Equipos-unidades</span></a>
</li>
@endif



@if(auth()->user()->hasRoles(['Admin','operador']))
<li class="{{ Request::is('userequipos*') ? 'active' : '' }}">
    <a href="{!! route('userequipos.index') !!}"><i class="fa fa fa-user"></i><i class="fa fa fa-desktop"></i><span>Usuarios-equipos</span></a>
</li>
@endif-->



@if(auth()->user()->hasRoles(['Admin','operador','estudiante']))
<li class="{{ Request::is('mantenimientos*') ? 'active' : '' }}">
    <a href="{!! route('mantenimientos.index') !!}"><i class="fa fa-gear"></i><span>Mantenimiento</span></a>
</li>
@endif


@if(auth()->user()->hasRoles(['Admin','operador']))
<li class="{{ Request::is('cites*') ? 'active' : '' }}">
    <a href="{!! route('cites.index') !!}"><i class="fa fa-file-text"></i><span>Cites</span></a>
</li>
@endif

@if(auth()->user()->hasRoles(['Admin','operador','estudiante']))
<li class="{{ Request::is('herramientas*') ? 'active' : '' }}">
    <a href="{!! route('herramientas.index') !!}"><i class="fa fa-gears"></i><span>Herramientas</span></a>
</li>
@endif



<!--corregir este-->
<script language="JavaScript"> 

    function pregunta(){ 
        $('#ver').removeClass("active");
        $('#ver').addClass("active"); 
          } 

</script>






<!--<li class="{{ Request::is('equipos*') ? 'active' : '' }}">
    <a href="{!! route('equipos.index') !!}"><i class="fa fa-edit"></i><span>Equipos</span></a>
</li>

<li class="{{ Request::is('modelos*') ? 'active' : '' }}">
    <a href="{!! route('modelos.index') !!}"><i class="fa fa-edit"></i><span>Modelos</span></a>
</li>

<li class="{{ Request::is('marcas*') ? 'active' : '' }}">
    <a href="{!! route('marcas.index') !!}"><i class="fa fa-edit"></i><span>Marcas</span></a>
</li>-->

<li class="{{ Request::is('historiales*') ? 'active' : '' }}">
    <a href="{!! route('historiales.index') !!}"><i class="fa fa-edit"></i><span>Historiales</span></a>
</li>

