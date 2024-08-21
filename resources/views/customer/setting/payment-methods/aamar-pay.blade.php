<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="rounded-circle overflow-hidden text-center"
                        style="width: 50px; height: 50px; border-radius: 50%; background: rgba(128, 128, 128, 0.151); line-height: 50px;">
                        <img src="{{ asset('assets/images/payment-methods/aamar-pay.png') }}" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-9">
                    <h4 class="mb-0">
                        Aamar Pay
                        <i class="far fa-question-circle text-muted" title="Under Development" style="cursor: wait"></i>
                    </h4>
                    <p class="text-muted">Comming Soon</p>
                    @if ($userTemplate->aamar_pay)
                        Store ID:
                        {{ @$userTemplate->aamar_pay->decoded_credentials['store_id'] }}
                        <br>
                        Signature Key:
                        {{ @$userTemplate->aamar_pay->decoded_credentials['signature_key'] }}
                        <br>
                        Test Mode:
                        {{ @$userTemplate->aamar_pay->decoded_credentials['test_mode'] ? 'Yes' : 'No' }}
                        @if (@$userTemplate->aamar_pay->status == 1)
                            <span class="badge badge-success badge-pill ml-5">Active</span>
                        @else
                            <span class="badge badge-danger badge-pill ml-5">Inactive</span>
                        @endif
                        <br>
                    @endif
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                        data-target="#aamarPayModal" disabled>
                        <i class="fas fa-cog"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="aamarPayModal" tabindex="-1" aria-labelledby="aamarPayModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('update.aamar.pay') }}" method="POST" class="modal-content">
                                @csrf
                                <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="aamarPayModalLabel">
                                        Aamar Pay Configuration
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
                                        <input type="text" class="form-control" name="store_id"
                                            value="{{ @$userTemplate->aamar_pay->decoded_credentials['store_id'] }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signature_key">
                                            Singnature Key
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <input type="text" class="form-control" name="signature_key"
                                            value="{{ @$userTemplate->aamar_pay->decoded_credentials['signature_key'] }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">
                                            Status
                                            <sup class="text-danger">*</sup>
                                        </label>
                                        <select name="status" class="form-control">
                                            <option value="1"
                                                {{ @$userTemplate->aamar_pay->status == 1 ? 'selected' : '' }}>
                                                Active
                                            </option>
                                            <option value="0"
                                                {{ @$userTemplate->aamar_pay->status == 0 ? 'selected' : '' }}>
                                                Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" name="sandbox"
                                            {{ @$userTemplate->aamar_pay->decoded_credentials['test_mode'] ? 'checked' : '' }}>
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
