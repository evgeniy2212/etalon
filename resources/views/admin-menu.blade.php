<ul class="nav nav-tabs" id="admin-menu">
    <li class="nav-item admin-menu-item">
        <a class="nav-link menu-href {{ Request::path() == 'admin' ? 'active' : '' }}" href="/admin">Товари</a>
    </li>
    <li class="nav-item admin-menu-item ">
        <a class="nav-link menu-href {{ Request::path() == 'admin/create' ? 'active' : '' }}" href="/admin/create">Додати товар</a>
    </li>
    <li class="nav-item admin-menu-item ">
        <a class="nav-link menu-href {{ Request::path() == 'orders' ? 'active' : '' }}" href="{{ route('orders') }}">Замовлення</a>
    </li>
</ul>