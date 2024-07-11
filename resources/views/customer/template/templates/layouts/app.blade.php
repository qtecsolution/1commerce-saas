<!DOCTYPE html>
<html lang="bn">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('template/css/swiper_icon.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('template/css/app.css') }}" />
    @yield('page_css')

    {{-- internal css --}}
    <style>
        /* [v-cloak] {
            display: none;
        } */
    </style>
</head>

<body>
    <div id="__next" v-cloak>
        {{-- page content --}}
        @yield('page_content')
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('template/js/script.js') }}"></script>
    @yield('page_js')
</body>

</html>
