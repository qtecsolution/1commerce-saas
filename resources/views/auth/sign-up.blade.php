@php
    $title = 'Sign-up';
@endphp
@extends('layouts.guest')

@section('page_content')
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex"
        style="background-image: url('{{ asset('assets/images/login.jpg') }}')">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100" style="padding-right: 0; padding-left: 30px;">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                {{-- error message --}}
                                <x-alert />
                                <div class="d-flex align-items-center justify-content-between m-b-30">
                                    <img class="img-fluid" alt="img" src="{{ asset('assets/images/logo/logo.png') }}">
                                    <h2 class="m-b-0">Sign-up</h2>
                                </div>
                                <form action="{{ route('sign_up') }}" class="row" method="POST">
                                    @csrf

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="name">Name:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="name" placeholder="name"
                                                    name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="phone">Phone:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-phone"></i>
                                                <input type="text" class="form-control" id="phone"
                                                    placeholder="phone" name="phone" value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-mail"></i>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="email" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password" name="password" value="{{ old('password') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password_confirmation">Confirm
                                                Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    placeholder="Confirm Password" name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="package">Package:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-copy"></i>
                                                <input type="text" class="form-control" id="package"
                                                    placeholder="package" name="package"
                                                    value="{{ session('selected_package')['title'] }}" readonly>
                                                <input type="hidden" name="package_id"
                                                    value="{{ session('selected_package')['id'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <span class="font-size-13 text-muted">
                                                Already have an account?
                                                <a class="small" href="{{ route('sign_in') }}">Sign-in</a>
                                            </span>
                                            <div class="text-right mt-2">
                                                <button class="btn btn-sm btn-primary" type="submit">Sign-up</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
