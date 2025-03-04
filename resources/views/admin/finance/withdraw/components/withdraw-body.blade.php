<div class="row justify-content-between">
    <div class="col-md-5">
        <h5 class="font-weight-bold">Date</h5>
    </div>
    <div class="col-md-7">
        <h5>: {{ date('d F, Y - h:i A', strtotime($withdraw->created_at)) }}</h5>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-5">
        <h5 class="font-weight-bold">Amount</h5>
    </div>
    <div class="col-md-7">
        <h5>: {{ number_format($withdraw->amount, 2) }}</h5>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-5">
        <h5 class="font-weight-bold">Charge</h5>
    </div>
    <div class="col-md-7">
        <h5>: {{ number_format($withdraw->charge, 2) }}</h5>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-5">
        <h5 class="font-weight-bold">Payable</h5>
    </div>
    <div class="col-md-7">
        <h5>: {{ number_format($withdraw->payable, 2) }}</h5>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-5">
        <h5 class="font-weight-bold">Payment Method</h5>
    </div>
    <div class="col-md-7">
        <h5>:</h5>
        <pre class=""><code style="white-space: pre-wrap;">{{ json_encode(json_decode($withdraw->details), JSON_PRETTY_PRINT) }}</code></pre>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-md-5">
        <h5 class="font-weight-bold">Status</h5>
    </div>
    <div class="col-md-7">
        <h5>:
            {{ $withdraw->status == 1 ? 'Approved' : ($withdraw->status == 2 ? 'Rejected' : 'Pending') }}
        </h5>
    </div>
</div>

@if ($withdraw->status != 0)
    <div class="row justify-content-between">
        <div class="col-md-5">
            <h5 class="font-weight-bold">Confirmed On</h5>
        </div>
        <div class="col-md-7">
            <h5>:
                {{ date('d F, Y - h:i A', strtotime($withdraw->updated_at)) }}
            </h5>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-md-5">
            <h5 class="font-weight-bold">Remarks</h5>
        </div>
        <div class="col-md-7">
            <h5>:
                {{ $withdraw->payment_reference }}
            </h5>
        </div>
    </div>
@endif
