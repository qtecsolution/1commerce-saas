<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! renderSeoTags($userTemplate->id) !!}

    <link rel="shortcut icon"
        href="{{ $userTemplate->fav_icon ? asset('storage/' . $userTemplate->fav_icon) : asset($userTemplate->template->assets_path . '/images/favicon.png') }}"
        type="image/x-icon">

    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/font-awesome.min.css') }}"> --}}
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/turquoise.css') }}" class="colors"> --}}

    <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->

    <style>
        #menu-link {
            top: 80px;
        }
    </style>
</head>

<body id="home">
    <x-template-edit-bar :userTemplate="$userTemplate" />

    <main id="app" style="margin-top: 50px">
        <attar :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}"
            :is_editable="true" />
    </main>

    <!-- Core scrips -->
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/bootstrap5.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/core.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/menu-overlay.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/placeholders.min.js') }}"></script>
    <!-- end core scripts -->

    <!-- sliders -->
    {{-- <script type="text/javascript" src="{{ asset($template->assets_path . '/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/jquery.waitforimages.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/sliders.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/numbers.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/contact.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/parallax.js') }}"></script> --}}
</body>

</html>
