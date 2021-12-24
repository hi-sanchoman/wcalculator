<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="{{ Request::is('managers*') ? 'active' : '' }}">
    <a href="{{ route('managers.index') }}"><i class="fa fa-edit"></i><span>@lang('models/managers.plural')</span></a>
</li>

