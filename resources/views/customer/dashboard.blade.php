@php
    $title = 'Dashboard';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-1">
                        <img src="{{ asset('assets/images/waving-hand.png') }}" width="100" alt="" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3>Hey! {{ auth()->user()->name }}</h3>
                        <p>
                            Welcome back. Today {{ date('dS F, Y') }} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 d-none">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-icon avatar-lg avatar-purple">
                                <i class="anticon anticon-user"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="m-b-0">1,832</h2>
                                <p class="m-b-0 text-muted">Total User</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
