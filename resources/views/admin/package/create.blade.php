@php
    $title = 'Create Package';
@endphp
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

            <form action="{{ route('packages.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="form-label">Title:</label>
                            <input type="text" name="title" placeholder="title" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="form-label">Price:</label>
                            <input type="number" name="price" placeholder="price" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="form-label">Duration:</label>
                            <input type="number" name="duration" placeholder="duration" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 1:</label>
                            <input type="text" name="feature_0" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 2:</label>
                            <input type="text" name="feature_1" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 3:</label>
                            <input type="text" name="feature_2" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 4:</label>
                            <input type="text" name="feature_3" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 5:</label>
                            <input type="text" name="feature_4" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 6:</label>
                            <input type="text" name="feature_5" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 7:</label>
                            <input type="text" name="feature_6" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 8:</label>
                            <input type="text" name="feature_7" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 9:</label>
                            <input type="text" name="feature_8" placeholder="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="form-label">Feature 10:</label>
                            <input type="text" name="feature_9" placeholder="" id="" class="form-control">
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
@endsection
