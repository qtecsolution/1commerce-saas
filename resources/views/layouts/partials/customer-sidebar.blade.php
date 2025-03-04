<li>
    <a href="{{ route('user_dashboard') }}"
        class="{{ Route::currentRouteName() == 'user_dashboard' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('orders') }}" class="{{ Route::currentRouteName() == 'orders' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-clipboard-list"></i>
        </span>
        <span class="title">Orders</span>
    </a>
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
        @php
            $routes = ['templates.index', 'templates.select'];
        @endphp
        <li class="{{ in_array(Route::currentRouteName(), $routes) ? 'active' : '' }}">
            <a href="{{ route('templates.index') }}">Landing Pages</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'templates.mine' ? 'active' : '' }}">
            <a href="{{ route('templates.mine') }}">My Templates</a>
        </li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
            <i class="fas fa-wallet"></i>
        </span>
        <span class="title">1Wallet</span>
        <span class="arrow">
            <i class="arrow-icon"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li class="{{ Route::currentRouteName() == 'my.wallet' ? 'active' : '' }}">
            <a href="{{ route('my.wallet') }}">My Wallet</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'wallet.withdraw' ? 'active' : '' }}">
            <a href="{{ route('wallet.withdraw') }}">Cash Withdrawal</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'wallet.transaction.history' ? 'active' : '' }}">
            <a href="{{ route('wallet.transaction.history') }}">Transaction History</a>
        </li>
        <li class="{{ Route::currentRouteName() == 'wallet.withdraw.history' ? 'active' : '' }}">
            <a href="{{ route('wallet.withdraw.history') }}">Withdrawal History</a>
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
    <a href="{{ route('custom-domain.index') }}"
        class="{{ Route::currentRouteName() == 'custom-domain.index' ? 'parent-menu-active' : '' }}">
        <span class="icon-holder">
            <i class="fas fa-globe"></i>
        </span>
        <span class="title">Custom Domain</span>
    </a>
</li>
