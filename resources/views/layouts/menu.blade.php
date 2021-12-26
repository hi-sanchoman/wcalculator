<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="{{ Request::is('managers*') ? 'active' : '' }}">
    <a href="{{ route('managers.index') }}"><i class="fa fa-edit"></i><span>@lang('models/managers.plural')</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>@lang('models/categories.plural')</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>@lang('models/products.plural')</span></a>
</li>

<li class="{{ Request::is('materials*') ? 'active' : '' }}">
    <a href="{{ route('materials.index') }}"><i class="fa fa-edit"></i><span>@lang('models/materials.plural')</span></a>
</li>

<li class="{{ Request::is('addons*') ? 'active' : '' }}">
    <a href="{{ route('addons.index') }}"><i class="fa fa-edit"></i><span>@lang('models/addons.plural')</span></a>
</li>

<li class="{{ Request::is('increments*') ? 'active' : '' }}">
    <a href="{{ route('increments.index') }}"><i class="fa fa-edit"></i><span>@lang('models/increments.plural')</span></a>
</li>

