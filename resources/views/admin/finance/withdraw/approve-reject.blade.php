@php
    $title = 'Approve/Reject Withdrawal';
@endphp
@extends('layouts.app')

@section('page_content')
    <div class="col-12">
        <div class="card">
            <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                <h3 class="mb-0">{{ $title }}</h3>
                <p class="mb-0">
                    <a href="{{ route('withdrawal.index') }}" class="btn  btn-sm btn-primary">
                        Withdrawal List
                    </a>

                    <a href="{{ route('withdrawal.show', $withdraw->id) }}" class="btn btn-sm btn-primary">
                        Show Details
                    </a>
                </p>
            </div>
            <div class="card-body">
                {{-- alert --}}
                <x-alert />

                <div class="card">
                    <div class="card-body p-3">
                        @include('admin.finance.withdraw.components.withdraw-body')
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body p-3">
                        <form action="{{ route('withdrawal.approve_reject', $withdraw->id) }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label>
                                    Status
                                    <sup class="text-danger">*</sup>
                                </label>
                                <select name="status" class="form-control" required>
                                    <option value="1">Approve</option>
                                    <option value="2">Reject</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>
                                    Remarks
                                    <sup class="text-danger">*</sup>
                                </label>
                                <textarea name="remarks" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
