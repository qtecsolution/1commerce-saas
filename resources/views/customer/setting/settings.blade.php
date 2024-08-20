@php
    $title = 'Settings';
@endphp
@section('page_css')
    <style>
        .card-s {
            margin-top: 2em;
            padding: 1.5em 0.5em 0.5em;
            border-radius: 2em;
            text-align: center;
            background: #F6F6F6;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .card-s img {
            width: 65%;
            /* border-radius: 20%; */
            margin: 0 auto;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
        }

        .card-s .card-title {
            font-weight: 500;
            font-size: 1.5em;
        }
    </style>
@endsection
@extends('layouts.app')
@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                <h3 class="mb-0">{{ $title }}</h3>
                <p class="mb-0">
                    <a href="{{ route('templates.mine') }}" class="btn brn-sm btn-danger">
                        Back
                    </a>
                </p>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />

                <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tracking_apis_tab" data-toggle="tab" href="#tracking_apis"
                            role="tab" aria-controls="tracking_apis" aria-selected="false">Tracking Api</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="payment_methods_tab" data-toggle="tab" href="#payment_methods"
                            role="tab" aria-controls="payment_methods" aria-selected="true">Payment Methods</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="custom_domain_tab" data-toggle="tab" href="#custom_domain" role="tab"
                            aria-controls="custom_domain" aria-selected="false">Custom Domain</a>
                    </li> --}}
                </ul>
                <div class="tab-content m-t-15" id="myTabContentJustified">
                    <div class="tab-pane fade" id="payment_methods" role="tabpanel" aria-labelledby="payment_methods_tab">
                        <div class="my-4">
                            <h3>Payment Methods</h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <div class="rounded-circle overflow-hidden text-center"
                                                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                                                        <img src="{{ asset('assets/images/payment-methods/ssl-commerz.png') }}"
                                                            class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0">SSL Commercrz</h4>
                                                    @if ($userTemplate->ssl_commerz)
                                                        Store ID:
                                                        {{ @$userTemplate->ssl_commerz->decoded_credentials['store_id'] }}
                                                        <br>
                                                        Store Password:
                                                        {{ @$userTemplate->ssl_commerz->decoded_credentials['store_password'] }}
                                                        <br>
                                                        Sandbox:
                                                        {{ @$userTemplate->ssl_commerz->decoded_credentials['test_mode'] ? 'Yes' : 'No' }}
                                                        @if (@$userTemplate->ssl_commerz->status == 1)
                                                            <span class="badge badge-success ml-5">Active</span>
                                                        @else
                                                            <span class="badge badge-danger ml-5">Inactive</span>
                                                        @endif
                                                        <br>
                                                    @endif
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-toggle="modal" data-target="#sslCommerzModal"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fas fa-cog"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="sslCommerzModal" tabindex="-1"
                                                        aria-labelledby="sslCommerzModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{ route('update.ssl.commerz') }}" method="POST"
                                                                class="modal-content">
                                                                @csrf
                                                                <input type="hidden" name="user_template_id"
                                                                    value="{{ $userTemplate->id }}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="sslCommerzModalLabel">
                                                                        SSL Commercrz
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="store_id">
                                                                            Store ID
                                                                            <sup class="text-danger">*</sup>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="store_id" name="store_id"
                                                                            value="{{ @$userTemplate->ssl_commerz->decoded_credentials['store_id'] }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="store_password">
                                                                            Store Password
                                                                            <sup class="text-danger">*</sup>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            id="store_password" name="store_password"
                                                                            value="{{ @$userTemplate->ssl_commerz->decoded_credentials['store_password'] }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="status">
                                                                            Status
                                                                            <sup class="text-danger">*</sup>
                                                                        </label>
                                                                        <select name="status" class="form-control"
                                                                            id="status">
                                                                            <option value="1"
                                                                                {{ @$userTemplate->ssl_commerz->status == 1 ? 'selected' : '' }}>
                                                                                Active
                                                                            </option>
                                                                            <option value="0"
                                                                                {{ !@$userTemplate->ssl_commerz->status == 0 ? 'selected' : '' }}>
                                                                                Inactive
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="exampleCheck1" name="sandbox"
                                                                            {{ @$userTemplate->ssl_commerz->decoded_credentials['test_mode'] ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="exampleCheck1">Sandbox</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Submit
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom_domain" role="tabpanel" aria-labelledby="custom_domain_tab">
                        <div class="my-4">
                            <h3>Custom Domain</h3>
                        </div>
                        <div class="d-flex">
                            <ul class="nav nav-tabs flex-column" id="myTabVertical" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="order_new_domain" data-toggle="tab"
                                        href="#order_new_domain_s" role="tab" aria-controls="order_new_domain_s"
                                        aria-selected="true">Order New Domain</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="connect_your_domain" data-toggle="tab"
                                        href="#connect_your_domain_s" role="tab"
                                        aria-controls="connect_your_domain_s" aria-selected="false">Connect Your
                                        Domain</a>
                                </li>
                            </ul>
                            <div class="tab-content m-l-15" id="myTabContentVertical">
                                <div class="tab-pane fade show active" id="order_new_domain_s" role="tabpanel"
                                    aria-labelledby="order_new_domain">
                                    <div class="card" style="width: 50vw; margin: 0 auto;">
                                        <div class="card-body">
                                            <h5 class="card-title mb-5 text-center">Choose your custom domain name</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="btn btn-primary" type="button">www.</div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="type your domain..." aria-label=""
                                                                aria-describedby="basic-addon1">
                                                            <div class="input-group-append">
                                                                <select name="" id=""
                                                                    class="form-control bg-primary text-light rounded-0 custom-border">
                                                                    <option value="" class="bg-white text-dark">.com
                                                                    </option>
                                                                    <option value="" class="bg-white text-dark">.xyz
                                                                    </option>
                                                                    <option value="" class="bg-white text-dark">.net
                                                                    </option>
                                                                    <option value="" class="bg-white text-dark">.org
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary"
                                                                    type="button">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-auto pb-3 justify-content-center">
                                                <div class="btn btn-sm btn-primary mx-1">
                                                    .com
                                                </div>
                                                <div class="btn btn-sm btn-primary mx-1">
                                                    .xyz
                                                </div>
                                                <div class="btn btn-sm btn-primary mx-1">
                                                    .net
                                                </div>
                                                <div class="btn btn-sm btn-primary mx-1">
                                                    .org
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="connect_your_domain_s" role="tabpanel"
                                    aria-labelledby="connect_your_domain">
                                    <div class="card" style="width: 50vw; margin: 0 auto;">
                                        <div class="card-body">
                                            <h4 class="text-center"
                                                style="text-decoration: underline; text-transform: capitalize;">Read,
                                                before sending a domain request</h4>
                                            <div class="text-align-justify mt-4">
                                                <p>Before sending request for your custom domain, You need to add CNAME
                                                    records (given In below table) In your custom domain From
                                                    your domain registrar account (like namecheap, godaddy, FOR etc..).
                                                    CNAME records are needed to point your custom domain to our
                                                    domain ( globalfastcoder.com ), so that our website can show your webs'.
                                                    on your custom domain Different domain registrar (like godaddy,
                                                    namecheap, POR etc..) has different interface for adding CNAME records.
                                                    If you cannot find the place to add NAME record in your domain
                                                    registrar account., then please contact your domain registrar
                                                    support,they will show you the place to add CNAME record for your custom
                                                    domain.
                                                    They can also help you with adding CNAME record for you.</p>
                                            </div>
                                            <h5 class="card-title mt-4">Add CNMA records (taka data from below table) in
                                                your
                                                custom domain</h5>
                                            <div class="table-responsive mt-4">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Host</th>
                                                            <th>Value</th>
                                                            <th>TTL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>CNAME Record</td>
                                                            <td>www</td>
                                                            <td>globalfastcoder.com</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>CNAME Record</td>
                                                            <td>@</td>
                                                            <td>globalfastcoder.com</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Use this if you are using cloudflare</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>A Record</td>
                                                            <td>@</td>
                                                            <td>143.198.195.149</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tracking_apis" role="tabpanel"
                        aria-labelledby="tracking_apis_tab">
                        <div class="my-4">
                            <h3>Facebook Pixel</h3>
                            <div class="col-md-6 pl-0">
                                <h5>Instructions for Adding Facebook Pixel Code</h5>
                                <ol>
                                    <li>Login to your <a href="https://www.facebook.com/" target="_blank">Facebook
                                            account</a>.</li>
                                    <li>Navigate to the <a href="https://www.facebook.com/events_manager2/"
                                            target="_blank">Event Manager</a> page.</li>
                                    <li>In the sidebar, click on "Connect Data Sources."</li>
                                    <li>Select "Web" from the available options and click "Next."</li>
                                    <li>Enter a name for the event and click "Create."</li>
                                    <li>Go to the "Events Overview" tab and click "Set up Meta Pixel" under the "Gather
                                        website events from browser activity" section.</li>
                                    <li>Select "Manually add Pixel code to website."</li>
                                    <li>Copy the provided Pixel code and paste it in the designated area below.</li>
                                    <li>Click "Save" to complete the setup.</li>
                                    <li>Congratulations! Your Facebook Pixel setup is now complete.</li>
                                </ol>
                            </div>
                        </div>
                        <form action="{{ route('tracking_api') }}" method="POST" class="mt-3">
                            @csrf
                            <input type="hidden" name="id" value="{{ @$trackingApi->id }}">
                            <input type="hidden" name="user_template_id" value="{{ @$userTemplate->id }}">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Facebook Pixel Code</label>
                                        <textarea name="fb_pixel" id="" rows="7" class="form-control">{{ @$trackingApi->fb_pixel_value }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="my-4">
                                <h3>Google Tag Manager</h3>
                                <div class="col-md-6 pl-0">
                                    <h5>Instructions for Adding Google Tag Manager Code</h5>
                                    <ol>
                                        <li>Login to your <a href="https://tagmanager.google.com" target="_blank">Google Tag Manager account</a>.</li>
                                        <li>Click on the "Create Account".</li>
                                        <li>Fill up the form and select "Web" on the Target Platform.</li>
                                        <li>Copy and Paste the provided code.</li>
                                        <li>Click "Save" to complete the setup.</li>
                                        <li>Congratulations! Your Google Tag Manager (GTM) setup is now complete.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Google Tag Manager (Header)</label>
                                        <textarea name="gtm_head_key" id="" rows="7" class="form-control">{{ @$trackingApi->gtm_head_value }}</textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Google Tag Manager (Body)</label>
                                        <textarea name="gtm_body_value" id="" rows="7" class="form-control">{{ @$trackingApi->gtm_body_value }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
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
    </script>
@endsection
