@php
    $title = 'Setup ' . $template->name;
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="mb-0">{{ $title }}</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="javascript:void(0)"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('templates.select', $template->id) }}" method="POST" class="row"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="template_id" value="{{ $template['id'] }}">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_name" class="form-label">
                                Company Name
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}"
                                placeholder="Enter Company Name" required>
                            @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_logo" class="form-label">
                                Company Logo
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="file" name="company_logo" class="form-control" accept="image/*" required>
                            @error('company_logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name" class="form-label">
                                Product Name
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}"
                                placeholder="Product Name" required>
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_price" class="form-label">
                                Product Price
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="number" step="0.01" min="0" name="product_price" class="form-control"
                                value="{{ old('product_price') }}" id="product_price" placeholder="0.00" required>
                            @error('product_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_currency" class="form-label">
                                Shipping Cost
                                <sup class="text-muted">(Inside Dhaka)</sup>
                            </label>
                            <input type="number" min="0" step="0.01" name="shipping_cost_inside_dhaka"
                                class="form-control" value="{{ old('shipping_cost_inside_dhaka') }}" placeholder="0.00">
                            @error('shipping_cost_inside_dhaka')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="shipping_cost_outside_dhaka" class="form-label">
                                Shipping Cost
                                <sup class="text-muted">(Outside Dhaka)</sup>
                            </label>
                            <input type="number" min="0" step="0.01" name="shipping_cost_outside_dhaka"
                                class="form-control" value="{{ old('shipping_cost_outside_dhaka') }}" placeholder="0.00">
                            @error('shipping_cost_outside_dhaka')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="company_slug" class="form-label">
                                Template Slug
                                <sup class="text-danger">*</sup>
                            </label>
                            <input type="text" name="company_slug" class="form-control"
                                value="{{ old('company_slug') }}" id="company_slug" onkeyup="checkSlug()"
                                placeholder="template-slug" required>
                            <p id="slug_error"></p>
                            @error('company_slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="offset-md-6"></div>

                    <div class="col-12 text-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        function checkSlug() {
            var slug = $('#company_slug').val();
            if (slug) {
                $.ajax({
                    url: "{{ route('templates.slug.availability') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        slug: slug
                    },
                    success: function(response) {
                        if (response.status === false) {
                            $('#slug_error').html('<span class="text-danger">Slug is not available</span>')
                                .show();
                        } else {
                            $('#slug_error').html('<span class="text-success">Slug is available</span>').show();
                        }
                    },
                    error: function(xhr, status, error) {
                        // console.error('AJAX Error:', status, error);
                        $('#slug_error').html('<span class="text-danger">Slug is not available</span>').show();
                    }
                });
            } else {
                $('#slug_error').html('<span class="text-danger">Slug is required</span>').show();
            }
        }
    </script>
@endsection
