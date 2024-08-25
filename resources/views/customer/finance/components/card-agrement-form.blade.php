<form action="{{ route('create.one.wallet') }}" method="POST" class="modal-content">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="oneWalletModalLabel">
            1Wallet User Agreement
        </h5>
    </div>
    <div class="modal-body">
        @include('customer.finance.components.terms')
        <hr>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="security_code">
                    Security Code
                    <sup class="text-danger">*</sup>
                </label>
                <input type="number" class="form-control" name="security_code" min="0"
                    placeholder="Enter Security Code" required>
            </div>
            <div class="form-group col-md-6">
                <label for="status">
                    Status
                    <sup class="text-danger">*</sup>
                </label>
                <select name="status" class="form-control">
                    <option value="1">
                        Active
                    </option>
                    <option value="0">
                        Inactive
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="oneWalletExampleCheck1" name="agree" required>
            <label class="form-check-label" for="oneWalletExampleCheck1">I agree to the
                terms and conditions.</label>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</form>
