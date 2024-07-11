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
            <div class="card-header py-2">
                <h3 class="mb-0">{{ $title }}</h3>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />

                <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="payment_methods" data-toggle="tab" href="#payment_methods_s"
                            role="tab" aria-controls="payment_methods" aria-selected="true">Payment Methods</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="invoice_format" data-toggle="tab" href="#invoice_format_s" role="tab"
                            aria-controls="invoice_format" aria-selected="false">Invoice Formats</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" id="custom_domain" data-toggle="tab" href="#custom_domain_s" role="tab"
                            aria-controls="custom_domain" aria-selected="false">Custom Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tracking_api" data-toggle="tab" href="#tracking_api_s" role="tab"
                            aria-controls="tracking_api" aria-selected="false">Tracking Api</a>
                    </li>
                </ul>
                <div class="tab-content m-t-15" id="myTabContentJustified">
                    <div class="tab-pane fade show active" id="payment_methods_s" role="tabpanel"
                        aria-labelledby="payment_methods">
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
                                                        <img src="{{ asset('template/media/logo/cashon.png') }}"
                                                            class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0">Cash on delivery</h4>
                                                    <a href="" class="btn btn-sm btn-primary">Activate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <div class="rounded-circle overflow-hidden text-center"
                                                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                                                        <img src="{{ asset('template/media/logo/bkash.svg') }}"
                                                            class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0">bKash</h4>
                                                    <a href="" class="btn btn-sm btn-primary">Activate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <div class="rounded-circle overflow-hidden text-center"
                                                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                                                        <img src="{{ asset('template/media/logo/nagad.png') }}"
                                                            class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0">Nagad</h4>
                                                    <a href="" class="btn btn-sm btn-primary">Activate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <div class="rounded-circle overflow-hidden text-center"
                                                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                                                        <img src="{{ asset('template/media/logo/rocket.png') }}"
                                                            class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0">Rocket</h4>
                                                    <a href="" class="btn btn-sm btn-primary">Activate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <div class="rounded-circle overflow-hidden text-center"
                                                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                                                        <img src="{{ asset('template/media/logo/ssl.png') }}"
                                                            class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0">SSL</h4>
                                                    <a href="" class="btn btn-sm btn-primary">Activate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bkash Modal Start-->
                            {{-- <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Bkash</h4>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            <form action="#" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="" class="form-label">Account Number<span
                                                            class="text-danger"><sup>*</sup></span> :</label>
                                                    <input type="number" name="#" placeholder="account number"
                                                        id="" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Account Type:</label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <select name="#" id="" class="form-control">
                                                                <option value="0">Choose Type</option>
                                                                <option value="Personal">Personal</option>
                                                                <option value="Merchant">Merchant</option>
                                                                <option value="Agent">Agent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Percentage Type:</label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="type your percentage..." aria-label=""
                                                                    aria-describedby="basic-addon1">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-primary"
                                                                        type="button">%</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Bkash Modal End-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="invoice_format_s" role="tabpanel" aria-labelledby="invoice_format">
                        <div class="my-4">
                            <h3>Invoice Formates</h3>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom_domain_s" role="tabpanel" aria-labelledby="custom_domain">
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
                                            <div class="d-flex overflow-auto pb-3 justify-content-center"
                                                id="akash-btn-mbl-scroll">
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
                    <div class="tab-pane fade" id="tracking_api_s" role="tabpanel" aria-labelledby="tracking_api">
                        <div class="my-4">
                            <h3>Facebook Pixel</h3>
                        </div>
                        <form action="{{ route('tracking_api') }}" method="POST" class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Facebook Varification</label>
                                        <textarea name="fb_varification_key" id="" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Facebook Pixel</label>
                                        <textarea name="fb_pixel_value" id="" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="my-4">
                                <h3>Google Tag Manager</h3>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Google Tag Manager (Header)</label>
                                        <textarea name="gtm_head_key" id="" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Google Tag Manager (Body)</label>
                                        <textarea name="gtm_body_value" id="" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                       
                        {{-- <form action="#" method="POST" class="mt-3">
                            @csrf
                           
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('page_js')
@endsection
