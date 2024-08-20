<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="rounded-circle overflow-hidden text-center"
                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                        <img src="{{ asset('assets/images/payment-methods/ssl-commerz.png') }}" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-9">
                    <h4 class="mb-0">1Wallet</h4>
                    {{-- @if ($userTemplate->ssl_commerz)
                        Store ID:
                        {{ @$userTemplate->ssl_commerz->decoded_credentials['store_id'] }}
                        <br>
                        Store Password:
                        {{ @$userTemplate->ssl_commerz->decoded_credentials['store_password'] }}
                        <br>
                        Test Mode:
                        {{ @$userTemplate->ssl_commerz->decoded_credentials['test_mode'] ? 'Yes' : 'No' }}
                        @if (@$userTemplate->ssl_commerz->status == 1)
                            <span class="badge badge-success ml-5">Active</span>
                        @else
                            <span class="badge badge-danger ml-5">Inactive</span>
                        @endif
                        <br>
                    @endif --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                        data-target="#1WalletModal" class="btn btn-sm btn-primary">
                        <i class="fas fa-cog"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="1WalletModal" tabindex="-1" aria-labelledby="1WalletModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('update.ssl.commerz') }}" method="POST" class="modal-content">
                                @csrf
                                <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="1WalletModalLabel">
                                        SSL Commercrz
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="store_id">
                                            Store ID
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <input type="text" class="form-control" id="store_id" name="store_id"
                                            value="{{ @$userTemplate->ssl_commerz->decoded_credentials['store_id'] }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="store_password">
                                            Store Password
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <input type="text" class="form-control" id="store_password"
                                            name="store_password"
                                            value="{{ @$userTemplate->ssl_commerz->decoded_credentials['store_password'] }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">
                                            Status
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <select name="status" class="form-control" id="status">
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
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                            name="sandbox"
                                            {{ @$userTemplate->ssl_commerz->decoded_credentials['test_mode'] ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleCheck1">Test Mode</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
