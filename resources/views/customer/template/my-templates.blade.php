@php
    $title = 'Templates';
@endphp
@extends('layouts.app')

@section('page_content')
    {{-- alert --}}
    <x-alert />

    @forelse ($themes as $theme)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header py-2">
                    <h3 class="mb-0">Template #MS0{{ $theme->theme_id }}</h3>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/images/landing_page/' . $theme->theme_id . '.png') }}" alt=""
                        class="img-fluid rounded">
                    <div class="mt-2 text-center">
                        <a href="{{ route('user_shop', [$theme->shop_details->username, $theme->slug]) }}" target="_blank"
                            class="btn btn-sm btn-primary">Live Preview</a>
                        <a class="btn btn-sm btn-primary" href="{{ route('my-themes.edit', $theme->id) }}">Edit</a>
                        <button class="btn btn-sm btn-danger"
                            onclick="document.getElementById('delete-form-{{ $theme->id }}').submit();">Delete</button>

                        <form id="delete-form-{{ $theme->id }}" action="{{ route('my-themes.destroy', $theme->id) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center text-center">
                        <div class="col-12 mb-4">
                            <img src="{{ asset('assets/images/others/shop.png') }}" width="100" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-12">
                            <h3 class="mb-0">Hey! {{ auth()->user()->name }}</h3>
                            <p>
                                You have not created any theme yet 😔. <a href="{{ route('themes.index') }}">Click
                                    here</a> to create themes for you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
@endsection
