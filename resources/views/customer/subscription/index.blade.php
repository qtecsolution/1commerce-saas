@php
    $title = 'Subscription';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-1">
                        <img src="{{ asset('assets/images/others/subscribe.png') }}" width="100" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col">
                        <h3>Hey! {{ auth()->user()->name }}</h3>
                        <p>
                            @php
                                $package = auth()->user()->subscription_details->package_details;
                                $subscription = auth()->user()->subscription_details;
                            @endphp
                            You're using <strong>{{ $package->title }}</strong> that will expire at
                            <strong>{{ date('F d, Y', strtotime($subscription->ending_date)) }}</strong>. <br>
                            Renew your subscription before the expiration date.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section area start --}}
    @foreach ($packages as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-b-20 border-bottom">
                        <div class="media align-items-center">
                            <div class="avatar avatar-blue avatar-icon" style="height: 55px; width: 55px;">
                                <i class="anticon anticon-coffee font-size-25" style="line-height: 55px"></i>
                            </div>
                            <div class="m-l-15">
                                <h2 class="font-weight-bold font-size-30 m-b-0">
                                    &#2547;{{ number_format($item->price, 0) }}
                                    <span class="font-size-13 font-weight-semibold">/ {{ $item->duration }}
                                        days</span>
                                </h2>
                                <h4 class="m-b-0">{{ $item->title }}</h4>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled m-v-30">
                        @php
                            $features = json_decode($item->features, true);
                        @endphp

                        @foreach ($features as $feature)
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark font-weight-semibold">{{ $feature }}</span>
                                    <div class="text-success font-size-16">
                                        <i class="anticon anticon-check"></i>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('subscription.create') }}?package={{ $item->id }}"
                            class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    {{-- section area end --}}
@endsection

@section('page_js')
    <script>
        $(document).ready(function() {
            // init data table
            $('#table').DataTable();
        });
    </script>
@endsection
