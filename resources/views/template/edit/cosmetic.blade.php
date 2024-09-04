<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cosmetic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.min.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset($template->assets_path . '/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    {{-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> --}}
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->
</head>
<!-- body -->

<body class="main-layout">

    <x-template-edit-bar :userTemplate="$userTemplate" />
{{-- @dd($userTemplate); --}}
    <main id="app" style="margin-top: 50px">
        <cosmetic :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}" />
    </main>


    <!-- Javascript files-->
    <script src="{{ asset($template->assets_path . '/js/jquery.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/popper.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset($template->assets_path . '/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/custom.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/owl.carousel.min.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

    <script>
        $('.content').hide();

        $('.slider').click(function() {
            $(this).next('.content').slideToggle();
            this.toggle = !this.toggle;
            $(this).children("span").text(this.toggle ? "-" : "+");
            return false;
        });
    </script>
</body>

</html>
