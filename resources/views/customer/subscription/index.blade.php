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
                        <img src="{{ asset('assets/images/waving-hand.png') }}" width="100" alt="" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3>Hey! {{ auth()->user()->name }}</h3>
                        <p>
                            @php
                                $subscription = auth()->user()->subscription_details;
                                $package = auth()->user()->subscription_details?->package_details;
                            @endphp

                            @if (!is_null($subscription))
                                @php
                                    $endingDate = strtotime($subscription->ending_date);
                                    $today = strtotime(date('Y-m-d'));
                                @endphp

                                @if ($endingDate > $today)
                                    You're using <strong class="text-primary">{{ $package->title }}</strong> that will
                                    expire at
                                    <strong class="text-danger">
                                        {{ date('F d, Y', strtotime($subscription->ending_date)) }}
                                    </strong>.

                                    @if ($subscription->is_paid == 1)
                                        @if ($subscription->package_id == 1)
                                            <br>
                                            <a href="{{ route('subscription.extend', $subscription->id) }}"
                                                class="btn btn-sm rounded-pill btn-secondary confirmable"
                                                data-confirmation-text="Are you sure you want to extend the subscription period for this package to {{ @$subscription->package_details->duration }} days ?">
                                                Extend Subscription
                                            </a>
                                        @else
                                            <form action="{{ route('aamar-pay.make-payment') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="subscription_id"
                                                    value="{{ $subscription->id }}">
                                                <input type="hidden" name="is_extension_payment" value="true">

                                                <button type="submit"
                                                    class="btn btn-sm rounded-pill btn-secondary confirmable"
                                                    data-confirmation-text="Are you sure you want to extend the subscription period for this package to {{ @$subscription->package_details->duration }} days ?">
                                                    Extend Subscription
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                @else
                                    Your subscription is expired.
                                @endif
                            @else
                                You don't have any subscription.
                            @endif
                        </p>
                        @if ($subscription->is_paid == 0)
                            <form action="{{ route('aamar-pay.make-payment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                                <button type="submit" class="btn btn-sm btn-success rounded-pill confirmable"
                                    data-confirmation-text="Are you sure you want to make payment ?">
                                    Complete Payment
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section area start --}}
    @foreach ($packages as $item)
        @if ($item->id == $subscription->package_id && $endingDate > $today)
            @continue
        @endif
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
                        <div class="text-center">
                            <a href="{{ route('subscription.create') }}?package={{ $item->id }}"
                                class="btn btn-primary confirmable"
                                data-confirmation-text="Are you sure you want to start this subscription?">
                                Get Started
                            </a>
                        </div>
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
