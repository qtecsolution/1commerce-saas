<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta Tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSRF Token --}}
    <meta name="_token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>{{ config('app.name') }} | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    {{-- data table css --}}
    <link href="{{ asset('assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    {{-- select2 css --}}
    <link href="{{ asset('assets/vendors/select2/select2.css') }}" rel="stylesheet">

    {{-- sweet alert --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    {{-- internal css --}}
    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    @yield('page_css')

</head>

<body>
    <div id="app" class="app">
        <div class="layout">
            {{-- header --}}
            @include('layouts.header')

            {{-- sidebar --}}
            @include('layouts.sidebar')

            <!-- Page Container START -->
            <div class="page-container">
                <div class="main-content">
                    <div class="row">
                        {{-- content --}}
                        @yield('page_content')
                    </div>
                </div>
            </div>
            <!-- Page Container END -->
        </div>
    </div>

    {{-- jquery js --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

    {{-- data table js --}}
    <script src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>

    {{-- select2 js --}}
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>

    {{-- Sweet Alert JS --}}
    @include('sweetalert::alert')

    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    {{-- Page JS --}}
    @yield('page_js')

</body>

</html>
