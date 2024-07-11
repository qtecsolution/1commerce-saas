@php
    $title = 'Packages';
@endphp
@extends('layouts.guest')

@section('page_content')
    {{-- section area start --}}
    <div class="container">
        <div class="text-center m-t-30 m-b-40">
            <h2>Subscription plans</h2>
            <p class="w-45 m-h-auto m-b-30">Climb leg rub face on everything give attitude nap all day for under the bed.
                Chase mice attack feet but rub face.</p>
        </div>
        <div class="row">
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
                                <a href="{{ route('select_package', $item->id) }}" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- section area end --}}
@endsection
