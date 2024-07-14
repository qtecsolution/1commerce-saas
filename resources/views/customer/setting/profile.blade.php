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
                        <a class="nav-link" id="user_profile_tab" data-toggle="tab" href="#user_profile" role="tab"
                            aria-controls="user_profile" aria-selected="false">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="change_password_tab" data-toggle="tab" href="#change_password"
                            role="tab" aria-controls="change_password" aria-selected="false">Change Password</a>
                    </li>
                </ul>
                <div class="tab-content m-t-15" id="myTabContentJustified">
                    <div class="tab-pane fade" id="user_profile" role="tabpanel" aria-labelledby="user_profile">
                        <div class="my-4">
                            <h3>Personal Information</h3>
                        </div>
                        <form action="{{ route('update_profile') }}" method="POST" class="mt-5"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Name <span
                                                class="text-danger"><sup>*</sup></span> :</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="name" placeholder="name"
                                            value="{{ auth()->user()->name }}" id="" class="form-control" required>
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
                                        <input type="email" name="email" placeholder="Email"
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
                                                $photo = empty(auth()->user()->photo)
                                                    ? asset('assets/images/default-user.jpg')
                                                    : asset('storage/' . auth()->user()->photo);
                                            @endphp
                                            <img src="{{ $photo }}" width="100" alt=""
                                                class="img-fluid rounded" id="photo-preview">
                                        </div>
                                        <input type="file" name="photo" id="photo" class="form-control"
                                            onchange="photoPreview(event, 'photo-preview')">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">Address:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="address" placeholder="Address" id="" rows="10" class="form-control">{{ auth()->user()->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <label for="" class="form-label mb-0">NID Number:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="nid_number" placeholder="NID Number"
                                            value="{{ auth()->user()->nid_number }}" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="change_password" role="tabpanel" aria-labelledby="change_password">
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
                                        <input type="password" name="current_password" placeholder="Current Password"
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
                                        <input type="password" name="password" placeholder="New Password" id=""
                                            class="form-control" value="{{ old('password') }}" required>
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
                                        <input type="password" name="password_confirmation"
                                            placeholder="Confirm Password" id="" class="form-control" value="{{ old('password_confirmation') }}" required>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function activateTab(tabId) {
                $('.nav-link').removeClass('active');
                $('.tab-pane').removeClass('show active');

                var activeTab = $('#' + tabId);
                if (activeTab.length) {
                    $('[href="#' + tabId + '"]').addClass('active');
                    activeTab.addClass('show active');
                    window.scrollTo(0, 0);
                }
            }

            var fragment = window.location.hash.substring(1);
            if (fragment) {
                activateTab(fragment);
            }

            $('.nav-link').on('click', function() {
                var tabId = $(this).attr('href').substring(1);
                window.location.hash = tabId;
                activateTab(tabId);
            });

            window.addEventListener('hashchange', function() {
                var fragment = window.location.hash.substring(1);
                if (fragment) {
                    activateTab(fragment);
                }
            });
        });

        function photoPreview(event, id) {
            var input = document.getElementById('photo');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = new Image();
                    img.onload = function() {
                        var image = document.getElementById(id);
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    img.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
