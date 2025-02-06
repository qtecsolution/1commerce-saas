<div class="menu_area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('web.home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo/icon.png') }}" class="img-fluid" width="30px" alt="logo">
                    <span style="font-size: medium">Commerce</span>
                </a>
            </div>
            <div class="col-md-8">
                <ul>
                    <li><a href="{{ route('web.home') }}">Home</a></li>
                    {{-- <li><a href="{{ route('web.home') }}">About Us</a></li> --}}
                    <li><a href="{{ route('web.packages') }}">Packages</a></li>
                    {{-- <li><a href="{{ route('web.home') }}">Contact Us</a></li> --}}
                    <li>
                        <a href="{{ route('sign_in') }}" class="btn btn-primary py-2 text-white">
                            {{ auth()->check() ? 'Dashboard' : 'Sign In' }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
