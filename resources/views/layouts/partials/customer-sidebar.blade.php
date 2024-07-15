<li>
    <a href="{{ route('user_dashboard') }}"
        class="{{ Route::currentRouteName() == 'user_dashboard' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
            <i class="fas fa-clipboard-list"></i>
        </span>
        <span class="title">Order</span>
        <span class="arrow">
            <i class="arrow-icon"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li class="{{ Route::currentRouteName() == 'orders' ? 'active' : '' }}">
            <a href="{{ route('orders') }}">Orders</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'return_orders' ? 'active' : '' }}">
            <a href="{{ route('return_orders') }}">Returns</a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('tickets.index') }}"
        class="{{ Route::currentRouteName() == 'tickets.index' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-ticket-alt"></i>
        </span>
        <span class="title">Support Tickets</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
            <i class="fas fa-th-large"></i>
        </span>
        <span class="title">Template</span>
        <span class="arrow">
            <i class="arrow-icon"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li class="{{ Route::currentRouteName() == 'templates.index' ? 'active' : '' }}">
            <a href="{{ route('templates.index') }}">Landing Pages</a>
        </li>
        <li class="">
            <a href="">My Templates</a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('subscription.index') }}"
        class="{{ Route::currentRouteName() == 'subscription.index' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-donate"></i>
        </span>
        <span class="title">Subscription</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('settings') }}"
        class="{{ Route::currentRouteName() == 'settings' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="far fa-sun"></i>
        </span>
        <span class="title">Settings</span>
    </a>
</li>
