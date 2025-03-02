@php
    $title = 'Sign-in';
@endphp
@extends('layouts.guest')

@section('page_content')
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex"
        style="background-image: url('{{ asset('assets/images/login.jpg') }}');">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100" style="padding-right: 0; padding-left: 30px;">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                {{-- error message --}}
                                <x-alert />
                                <div class="d-flex align-items-center justify-content-between m-b-30">
                                    <a href="/">
                                        <img class="img-fluid" alt="img"
                                            src="{{ asset('assets/images/logo/logo.png') }}">
                                    </a>
                                    <h2 class="m-b-0">Sign-in</h2>
                                </div>
                                <form action="{{ route('sign_in') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Username:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text" class="form-control" id="userName" placeholder="Username"
                                                name="username" value="{{ old('username') }}">
                                        </div>
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        {{-- <a class="float-right font-size-13 text-muted" href="javascript:void(0)"
                                            onclick="return alert('Under development !!')">
                                            Forgot Password?
                                        </a> --}}
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Password" name="password" value="{{ old('password') }}">
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <span class="font-size-13 text-muted">
                                            Don't have an account?
                                            <a class="small" href="{{ route('sign_up') }}"> Sign-up</a>
                                        </span>
                                        <div class="text-right mt-2">
                                            <button class="btn btn-sm btn-primary" type="submit">Sign-in</button>
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
