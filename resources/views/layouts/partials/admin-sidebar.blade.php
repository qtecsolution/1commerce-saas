<li class="nav-item dropdown">
    <a href="{{ route('admin_dashboard') }}"
        class="{{ Route::currentRouteName() == 'admin_dashboard' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a href="{{ route('packages.index') }}"
        class="{{ Route::currentRouteName() == 'packages.index' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-clipboard-list"></i>
        </span>
        <span class="title">Packages</span>
    </a>
</li>
{{-- <li class="nav-item dropdown">
    <a href="">
        <span class="icon-holder">
            <i class="fas fa-users"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li> --}}
<li class="nav-item dropdown">
    <a href="{{ route('withdrawal.index') }}"
        class="{{ Route::currentRouteName() == 'withdrawal.index' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-dollar-sign"></i>
        </span>
        <span class="title">Withdrawals</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a href="{{ route('support_tickets') }}"
        class="{{ Route::currentRouteName() == 'support_tickets' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-ticket-alt"></i>
        </span>
        <span class="title">Support Tickets</span>
    </a>
</li>
