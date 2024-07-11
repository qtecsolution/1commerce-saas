<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta Tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Title --}}
    <title>{{ config('app.name') }} | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <div class="app">
        {{-- content --}}
        @yield('page_content')
    </div>

    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    {{-- Sweet Alert JS --}}
    @include('sweetalert::alert')

</body>

</html>
