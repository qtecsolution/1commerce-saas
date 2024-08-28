<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    {!! renderSeoTags($userTemplate->id) !!}

    <!-- Font Awesome icon css-->
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset($userTemplate->template->assets_path . '/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset($userTemplate->template->assets_path . '/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/responsive.css') }}">
    {{-- fevicon icon --}}
    <link rel="shortcut icon"
        href="{{ $userTemplate->fav_icon ? asset('storage/' . $userTemplate->fav_icon) : asset($userTemplate->template->assets_path . '/images/logo.png') }}"
        type="image/x-icon">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="{{ asset($userTemplate->template->assets_path . '/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/owl.carousel.min.css') }}">
    <link rel="stylesoeet" href="{{ asset($userTemplate->template->assets_path . '/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->

</head>

<body>
    <x-template-edit-bar :userTemplate="$userTemplate" />
    <main id="app" class="mt-5">
        <cycle :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}" />
    </main>

    <!-- Javascript files-->
    {{-- <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.min.js')}}"></script> --}}
    <script src="{{ asset($userTemplate->template->assets_path . '/js/popper.min.js') }}"></script>
    {{-- <script src="{{ asset($userTemplate->template->assets_path . '/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
