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
                        <i class="far fa-check-circle text-success" title="Live" style="cursor: pointer"></i>
                    </h4>
                    @if ($userTemplate->userWallet)
                        Current Balance:
                        {{ number_format(@$userTemplate->userWallet->balance) }}
                        <br>
                        Security Code:
                        {{ @$userTemplate->userWallet->security_code }}
                        @if (@$userTemplate->userWallet->status == 1)
                            <span class="badge badge-success ml-5">Active</span>
                        @else
                            <span class="badge badge-danger ml-5">Inactive</span>
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
                        <div class="modal-dialog modal-lg">
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
                                    <p><strong>1. Introduction</strong></p>
                                    <p>Welcome to 1Wallet, the integrated wallet system for 1Commerce. By creating
                                        or applying for a 1Wallet, you agree to the following terms and conditions.
                                    </p>

                                    <p><strong>2. Account and Wallet Creation</strong></p>
                                    <p>By creating a 1Wallet, you acknowledge that this wallet is linked to your
                                        1Commerce account and will be used to store payments received from customers
                                        for products sold via your landing pages.</p>

                                    <p><strong>3. Payment and Storage</strong></p>
                                    <p>All payments received from your customers will be automatically stored in
                                        your 1Wallet. The funds in your 1Wallet can be used for future transactions
                                        or withdrawn as per the conditions stated below.</p>

                                    <p><strong>4. Withdrawal Policy</strong></p>
                                    <p>You may withdraw funds from your 1Wallet at any time. A minimum charge of
                                        0.5% will be applied to each withdrawal transaction. The exact amount
                                        deducted will be displayed prior to confirming your withdrawal request.</p>

                                    <p><strong>5. Fees and Charges</strong></p>
                                    <p>By using 1Wallet, you agree to the deduction of applicable fees, including
                                        the 0.5% withdrawal charge. These fees are subject to change with prior
                                        notice, and continued use of the service will constitute acceptance of the
                                        revised terms.</p>

                                    <p><strong>6. Account Security</strong></p>
                                    <p>You are responsible for maintaining the security of your 1Wallet and your
                                        1Commerce account. 1Commerce is not liable for any unauthorized access to
                                        your account due to your failure to safeguard your login credentials.</p>

                                    <p><strong>7. Amendments</strong></p>
                                    <p>1Commerce reserves the right to amend these terms and conditions at any time.
                                        Any changes will be communicated through the platform, and continued use of
                                        1Wallet after such changes will be deemed acceptance of the new terms.</p>

                                    <p><strong>8. Termination</strong></p>
                                    <p>1Commerce may terminate or suspend your access to 1Wallet at any time, with
                                        or without cause, and without prior notice. Upon termination, any funds
                                        remaining in your 1Wallet will be subject to the withdrawal terms outlined
                                        above.</p>

                                    <p><strong>9. Acceptance</strong></p>
                                    <p>By creating or applying for a 1Wallet, you confirm that you have read,
                                        understood, and agree to be bound by the terms and conditions of this
                                        agreement.</p>

                                    <p><strong>10. Contact</strong></p>
                                    <p>For any questions or concerns regarding 1Wallet or this agreement, please
                                        contact our support team at 1Commerce Support.</p>

                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="security_code">
                                                Security Code
                                                <sup class="text-danger">*</sup>
                                            </label>
                                            <input type="number" class="form-control" name="security_code" min="0" placeholder="Enter Security Code"
                                                value="{{ @$userTemplate->userWallet->security_code }}" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status">
                                                Status
                                                <sup class="text-danger">*</sup>
                                            </label>
                                            <select name="status" class="form-control">
                                                <option value="1"
                                                    {{ @$userTemplate->userWallet->status == 1 ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="0"
                                                    {{ @$userTemplate->userWallet->status == 0 ? 'selected' : '' }}>
                                                    Inactive
                                                </option>
                                            </select>
                                        </div>
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
