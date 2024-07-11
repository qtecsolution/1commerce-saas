<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            @if (auth()->user()->is_admin == 0)
                @include('layouts.partials.customer-sidebar')
            @else
                @include('layouts.partials.admin-sidebar')
            @endif
        </ul>
    </div>
</div>
<!-- Side Nav END -->
