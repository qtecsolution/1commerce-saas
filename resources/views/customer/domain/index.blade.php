@php
    $title = 'Custom Domain';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="page-header no-gutters has-tab">
            <h2 class="font-weight-normal">{{ $title }}</h2>
            <ul class="nav nav-tabs" >
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-account">Add New Domain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-network">Domain List</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="tab-account" >
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Custom Domain</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('custom-domain.store') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="domain_name" class="form-label">Custom Domain<span class="text-danger"><sup>*</sup></span> :</label>
                                        <input type="text" id="domain_name" class="form-control"
                                        name="domain_name" pattern="^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="font-weight-semibold" for="site">Select Site:</label>
                                        <select id="site" name="user_template_id" class="form-control">
                                            @foreach($userTemplates as $site)
                                                <option value="{{$site->id}}"> {{$site->company_name}} ({{$site->company_slug}}) </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-10">
                                        <p class="text-black font-weight-bold"><b class="text-danger">Note:</b> Before submitting a request for your custom domain, please ensure that you have added the records listed in the table below to your domain registrar account.</p>
                                    </div>
                                    <div class="form-group col-md-2 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><span class="text-danger">**</span> Add Records</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Type</th>
                                            <th scope="col">Host</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">TTL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">A Record</th>
                                            <td>@</td>
                                            <td>13.235.223.227</td>
                                            <td>Automatic</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">A Record</th>
                                            <td>www</td>
                                            <td>13.235.223.227</td>
                                            <td>Automatic</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-network">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Custom Domain</th>
                                            <th scope="col">Sub Domain</th>
                                            <th scope="col">Domain Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>qtecsolution.xyz</td>
                                            <td>qtec.{{env('APP_DOMAIN')}}</td>
                                            <td> <span class="text-success"> <i class="fa fa-check"></i> Verified </span> </td>
                                            <td>10-08-2024</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>qtecsolution.net</td>
                                            <td>nmb.{{env('APP_DOMAIN')}}</td>
                                            <td> <span class="text-danger"> <i class="fa fa-times"></i> Not Verified </span> <a href="#" title="Try Again" class="ml-2"><i class="fa fa-retweet"></i></a> </td>
                                            <td>15-08-2024</td>
                                            <td>...</td>
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
@endsection
