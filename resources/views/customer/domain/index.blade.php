@php
    $title = 'Custom Domain';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="page-header no-gutters has-tab">
            <h2 class="font-weight-normal">{{ $title }}</h2>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Add Custom Domain</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('custom-domain.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="domain_name" class="form-label">Custom Domain<span
                                        class="text-danger"><sup>*</sup></span> :</label>
                                <input type="text" id="domain_name" value="{{ old('domain_name') }}" class="form-control"
                                    name="domain_name" pattern="^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                    placeholder="Ex: example.com" required>
                                @if ($errors->has('domain_name'))
                                    <div style="color: red;">
                                        {{ $errors->first('domain_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-semibold" for="site">Select Site:</label>
                                <select id="site" name="user_template_id" class="form-control">
                                    @foreach ($userTemplates as $site)
                                        <option value="{{ $site->id }}"> {{ $site->company_name }}
                                            ({{ $site->company_slug }})
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('user_template_id'))
                                    <div style="color: red;">
                                        {{ $errors->first('user_template_id') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group col-md-10">
                                <p class="text-black font-weight-bold"><b class="text-danger">Note:</b> Before submitting a
                                    request for your custom domain, please ensure that you have added the records listed in
                                    the table below to your domain registrar account.</p>
                            </div>
                            <div class="form-group col-md-2 text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                    <h5><span class="text-danger">**</span> Add Records</h5>
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
                                    <td>A Record</td>
                                    <td>@</td>
                                    <td>{{ env('SERVER_IP') }}</td>
                                    <td>Automatic</td>
                                </tr>
                                <tr>
                                    <td>A Record</td>
                                    <td>www</td>
                                    <td>{{ env('SERVER_IP') }}</td>
                                    <td>Automatic</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-list"></i> Domain List</h4>
                </div>
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
                                @forelse($domains as $domain)
                                    <tr>
                                        <td> {{ $domain->domain_name }} </td>
                                        <td>{{ $domain->userTemplate->company_slug ?? '' }}.{{ env('APP_DOMAIN') }}</td>
                                        <td>
                                            @if ($domain->is_verified == 1)
                                                <span class="text-success"> <i class="fa fa-check"></i> Verified </span>
                                            @else
                                                @if ($domain->is_verified == 0)
                                                    <span class="text-danger"> <i class="fa fa-times"></i> Not Verified
                                                    </span>
                                                @else
                                                    <span class="text-warning" title="Partially verified"> <i
                                                            class="fa fa-info-circle"></i> Partial Verified </span>
                                                @endif
                                                <a href="{{ route('custom-domain.edit', $domain->id) }}" title="Try Again"
                                                    class="ml-2"><i class="fa fa-retweet"></i></a>
                                            @endif

                                        </td>
                                        <td> {{ date('d-m-Y', strtotime($domain->created_at)) }} </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-xs btn-warning" data-toggle="modal"
                                                    data-target="#editModal_{{ $domain->id }}"> <i class="fa fa-pen"></i>
                                                </a>

                                                {{-- update modal start --}}
                                                <div class="modal modal-right fade" id="editModal_{{ $domain->id }}"
                                                    tabindex="-1" aria-labelledby="editModalLabel_{{ $domain->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4>Update Domain</h4>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <i class="anticon anticon-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="{{ route('custom-domain.update', $domain->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <label for="update_domain_name"
                                                                                class="form-label">Custom Domain<span
                                                                                    class="text-danger"><sup>*</sup></span>
                                                                                :</label>
                                                                            <input type="text" id="update_domain_name"
                                                                                value="{{ old('update_domain_name') ?? $domain->domain_name }}"
                                                                                class="form-control"
                                                                                name="update_domain_name"
                                                                                pattern="^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                                                                placeholder="Ex: example.com" required>
                                                                            @if ($errors->has('update_domain_name'))
                                                                                <div style="color: red;">
                                                                                    {{ $errors->first('update_domain_name') }}
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label class="font-weight-semibold"
                                                                                for="site">Select Site:</label>
                                                                            <select id="site" name="user_template_id"
                                                                                class="form-control">
                                                                                @foreach ($userTemplates as $site)
                                                                                    <option value="{{ $site->id }}"
                                                                                        @if ($site->id == $domain->user_template_id) selected @endif>
                                                                                        {{ $site->company_name }}
                                                                                        ({{ $site->company_slug }})
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group col-md-12 text-right">
                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-primary">Save</button>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <p class="text-black font-weight-bold"><b
                                                                                    class="text-danger">Note:</b> Before
                                                                                submitting a request for your custom domain,
                                                                                please ensure that you have added the
                                                                                records (Listed in the Add Records table) to
                                                                                your domain registrar account.</p>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Delete trigger modal -->
                                                <a href="#" class="btn btn-xs btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal_{{ $domain->id }}"> <i
                                                        class="fa fa-trash"></i>
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal_{{ $domain->id }}">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Are
                                                                    you sure?</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">
                                                                    <i class="anticon anticon-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="delete-info text-center">
                                                                    <h1 class="text-danger">
                                                                        <i class="fa fa-times-circle"></i>
                                                                    </h1>
                                                                    <h3 class="delete-title"> Delete</h3>
                                                                    <p class="delete-text">Are you sure you want to delete
                                                                        it? Data cannot be undone.
                                                                    </p>
                                                                </div>
                                                                <div class="row justify-content-around border-top pt-3">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <form
                                                                        action="{{ route('custom-domain.destroy', $domain->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Are you sure you want to delete this domain?');">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-success">
                                                                            <i class="fa fa-trash"></i> Confirm
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->has('update_domain_name'))
                var id = {{ Session::get('id') ?? '' }}
                var updateModal = new bootstrap.Modal(document.getElementById(`editModal_${id}`), {});
                updateModal.show();
            @endif
        });
    </script>
@endsection
