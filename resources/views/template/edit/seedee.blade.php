<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>{{ $userTemplate->company_name }} :: Live Edit</title>
    {{-- fav icon --}}
    <link rel="shortcut icon"
        href="{{ $userTemplate->company_logo ? asset('storage/' . $userTemplate->company_logo) : asset($userTemplate->template->assets_path . '/images/favicon.png') }}"
        type="image/x-icon">

    <link href="{{ asset($userTemplate->template->assets_path . '/css/icon.css') }}" rel="stylesheet">
    <link href="{{ asset($userTemplate->template->assets_path . '/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/main.min.css') }}">
    <script src="{{ asset($userTemplate->template->assets_path . '/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->

    <style>
        .call-to-btn {
            position: fixed;
            z-index: 99;
            bottom: 100px;
            right: 30px;
            padding: 10px 10px;
            background: #86CD91;
            border-radius: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #004111;
            font-size: 17px;
        }

        .call-to-btn .material-icons-outlined {
            font-size: 17px;
        }

        @media only screen and (max-width: 575px) {
            .call-to-btn {
                bottom: 60px;
                right: 15px;
                padding: 5px 8px;
                font-size: 14px;
            }

            .call-to-btn .material-icons-outlined {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <main id="app">
        <seedee :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}" />
    </main>
</body>

</html>
