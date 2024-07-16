@php
    $title = 'Setup ' . $template['name'];
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
                        <a href="#"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('templates.select', $template['id']) }}" method="POST" class="row" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="template_id" value="{{ $template['id'] }}">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name<sup class="text-danger">*</sup></label>
                            <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_logo" class="form-label">Company Logo<sup class="text-danger">*</sup></label>
                            <input type="file" name="company_logo" class="form-control" accept="image/*" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name" class="form-label">Product Name<sup class="text-danger">*</sup></label>
                            <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}" required>
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
        $(document).ready(function() {
            // code
        });
    </script>
@endsection
