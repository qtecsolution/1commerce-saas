@php
    $title = 'Profiles';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2">
                <h3 class="mb-0">Profiles</h3>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />

                <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="shop_profile" data-toggle="tab" href="#shop_profile_2" role="tab"
                            aria-controls="shop_profile" aria-selected="true">Shop Informations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="user_profile" data-toggle="tab" href="#user_profile_2" role="tab"
                            aria-controls="user_profile" aria-selected="false">Personal Informations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="change_password" data-toggle="tab" href="#change_password_2" role="tab"
                            aria-controls="change_password" aria-selected="false">Change Password</a>
                    </li>
                </ul>
                <div class="tab-content m-t-15" id="myTabContentJustified">
                    <div class="tab-pane fade show active" id="shop_profile_2" role="tabpanel"
                        aria-labelledby="shop_profile">
                        <div class="my-4">
                            <h3>Shop Informations</h3>
                        </div>
                        @php
                            $route = empty($shop) ? route('shops.store') : route('shops.update', $shop->id);
                        @endphp
                        <form action="{{ $route }}" method="POST" enctype="multipart/form-data" class="mt-5">
                            @csrf
                            @if (!empty($shop))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Shop Name <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" placeholder="shop name"
                                            value="{{ !empty($shop) ? $shop->name : '' }}" id=""
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Shop Logo <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-2">
                                            @php
                                                $logo = empty($shop->logo) ? asset('assets/images/others/error.png') : asset('storage/' . $shop->logo);
                                            @endphp
                                            <img src="{{ $logo }}" width="100" alt="" class="img-fluid rounded">
                                        </div>
                                        <input type="file" name="logo" placeholder="shop logo" id=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Shop Address <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="address" placeholder="shop address" id="" rows="10" class="form-control" required>{{ !empty($shop) ? $shop->address : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="user_profile_2" role="tabpanel" aria-labelledby="user_profile">
                        <div class="my-4">
                            <h3>Personal Informations</h3>
                        </div>
                        <form action="{{ route('update_profile') }}" method="POST" class="mt-5" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Name <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" placeholder="name"
                                            value="{{ auth()->user()->name }}" id="" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Phone <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="phone" placeholder="phone"
                                            value="{{ auth()->user()->phone }}" id="" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Email <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" placeholder="email"
                                            value="{{ auth()->user()->email }}" id="" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Photo:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-2">
                                            @php
                                                $photo = empty(auth()->user()->photo) ? asset('assets/images/others/error.png') : asset('storage/' . auth()->user()->photo);
                                            @endphp
                                            <img src="{{ $photo }}" width="100" alt="" class="img-fluid rounded">
                                        </div>
                                        <input type="file" name="photo" placeholder="photo" id=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Address:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="address" placeholder="address" id="" rows="10" class="form-control">{{ auth()->user()->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">NID Number:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="nid_number" placeholder="nid number"
                                            value="{{ auth()->user()->nid_number }}" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="change_password_2" role="tabpanel" aria-labelledby="change_password">
                        <div class="my-4">
                            <h3>Change Password</h3>
                        </div>
                        <form action="{{ route('update_password') }}" method="POST" class="mt-5">
                            @csrf
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Current Password <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="password" name="current_password" placeholder="current password"
                                            id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">New Password <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="password" name="new_password" placeholder="new password"
                                            id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Confirm Password <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="password" name="new_password_confirmation"
                                            placeholder="confirm password" id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')

@endsection
