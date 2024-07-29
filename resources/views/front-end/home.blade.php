@php
    $title = 'Home';
@endphp
@extends('layouts.guest')

@push('css')
    <style>
        .menu_area {
            background: #f4f4f4;
            padding: 20px 0;
            font-size: 16px;
        }

        .menu_area a {
            color: #000000;
        }

        .menu_area .logo {
            font-size: 20px;
            font-weight: 700;
        }

        .menu_area ul {
            list-style: none;
            text-align: right;
        }

        .menu_area ul li {
            display: inline;
        }

        .menu_area ul li a {
            padding: 0 15px;
        }

        section.hero_area {
            margin: 60px 0;
        }

        .hero_area .hero_wrapper {
            background: #f4f4f4;
            padding: 30px;
            border-radius: 6px;
            text-align: center;
            height: 60vh;
        }

        .hero_area .hero_content h1 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 0;
        }
    </style>
@endpush

@section('page_content')
    {{-- navbar area --}}
    <div class="menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="logo">{{ env('APP_NAME') }}</a>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li><a href="{{ route('web.home') }}">Home</a></li>
                        <li><a href="{{ route('web.home') }}">About Us</a></li>
                        <li><a href="{{ route('web.packages') }}">Packages</a></li>
                        <li><a href="{{ route('web.home') }}">Contact Us</a></li>
                        <li><a href="{{ route('sign_in') }}" class="btn btn-primary py-2 text-white">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- hero area --}}
    <section class="hero_area">
        <div class="container">
            <div class="col-12">
                <div class="hero_wrapper row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="hero_content">
                            <h1>Welcome to {{ env('APP_NAME') }}</h1>
                            <p class="mb-5">
                                This project is developed using PHP, Laravel, and Vue.js, specifically designed for small and medium-sized enterprises (SMEs) to create and manage landing pages for their niche products. With this platform, users can effortlessly choose and customize their landing pages in real-time with just a few clicks.
                            </p>

                            <a href="{{ route('web.packages') }}" class="btn btn-primary btn-lg">Check Our Packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
