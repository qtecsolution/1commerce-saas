<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="rounded-circle overflow-hidden text-center"
                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                        <img src="{{ asset('assets/images/logo/icon.png') }}" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-9">
                    <h4 class="mb-0">
                        1Wallet
                        <a href="{{ route('my.wallet') }}">
                            @if (@$userTemplate->userWallet->status == 1)
                                <i class="far fa-check-circle text-success" title="Your Wallet is Live"
                                    style="cursor: pointer"></i>
                            @else
                                <i class="far fa-times-circle text-danger" title="Your Wallet is Inactive"
                                    style="cursor: pointer"></i>
                            @endif
                        </a>
                    </h4>
                    @if (@$userTemplate->userWallet->status != 1)
                        <a href="{{ route('my.wallet') }}" class="text-danger">
                            <small>
                                Your Wallet is corrently inactive. Activate it to receive order
                                payment.
                            </small>
                        </a>
                        <br>
                    @endif
                    @if ($userTemplate->one_wallet)
                        Current Balance:
                        {{ number_format(@$userTemplate->userWallet->balance) }}
                        <br>
                        Security Code:
                        {{ @$userTemplate->userWallet->security_code }}
                        @if (@$userTemplate->one_wallet->status == 1)
                            <span class="badge badge-success badge-pill ml-5">Active</span>
                        @else
                            <span class="badge badge-danger badge-pill ml-5">Inactive</span>
                        @endif
                        <br>
                    @else
                        <p>Not Configured</p>
                    @endif

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                        data-target="#oneWalletModal">
                        <i class="fas fa-cog"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="oneWalletModal" tabindex="-1" aria-labelledby="oneWalletModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog {{ !$userTemplate->userWallet ? 'modal-lg' : '' }}">
                            <form action="{{ route('update.one.wallet') }}" method="POST" class="modal-content">
                                @csrf
                                <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="oneWalletModalLabel">
                                        1Wallet User Agreement
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @if (!$userTemplate->userWallet)
                                        @include('customer.finance.components.terms')
                                        <hr>
                                    @endif
                                    <div class="form-group">
                                        <label for="status">
                                            Enable 1Wallet
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <select name="status" class="form-control">
                                            <option value="1"
                                                {{ @$userTemplate->one_wallet->status == 1 ? 'selected' : '' }}>
                                                Active
                                            </option>
                                            <option value="0"
                                                {{ @$userTemplate->one_wallet->status == 0 ? 'selected' : '' }}>
                                                Inactive
                                            </option>
                                        </select>
                                    </div>

                                    @if (!@$userTemplate->userWallet)
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="oneWalletExampleCheck1"
                                                name="agree" required>
                                            <label class="form-check-label" for="oneWalletExampleCheck1">I agree to the
                                                terms and conditions.</label>
                                        </div>
                                    @endif
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
