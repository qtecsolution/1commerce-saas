<style>
    .card-container {
        position: relative;
        padding: 25px;
        border-radius: 28px;
        max-width: 380px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        background: linear-gradient(135deg, rgba(57, 117, 227), rgba(10, 18, 27, 0.8)),
            url("{{ asset('assets/images/card/bg.png') }}");
        background-size: cover, 200% 200%;
        animation: gradientAnimation 15s ease infinite, bgAnimation 10s linear infinite;
    }

    @keyframes gradientAnimation {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    @keyframes bgAnimation {
        0% {
            background-position: 0% 0%;
        }

        50% {
            background-position: 100% 100%;
        }

        100% {
            background-position: 0% 0%;
        }
    }

    .card-logo {
        width: 48px;
        margin-right: 10px;
    }

    .chip {
        width: 60px;
    }

    .card-number {
        margin-top: 4px;
        font-size: 18px;
        letter-spacing: 1px;
    }

    .card-name {
        margin-top: 20px;
    }

    .card-container .card-details {
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }
</style>


<div class="card-container">
    <header>
        <span class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img class="card-logo" src="{{ asset('assets/images/logo/icon.png') }}" alt="logo" />
                <h5 class="text-white mt-2">Wallet</h5>
            </div>
            <div class="d-flex align-items-center">
                @if (@$userWallet->status == 1)
                    <span class="badge badge-success badge-pill">Active</span>
                @else
                    <span class="badge badge-danger badge-pill">Inactive</span>
                @endif
            </div>
        </span>
    </header>
    <div class="card-details">
        <div class="name-number">
            <h6 class="text-white">Current Balance</h6>
            <h5 class="card-number text-white">BDT {{ number_format(@$userWallet->balance) }}</h5>
            <h5 class="card-name text-white">{{ auth()->user()->name }}</h5>
        </div>
        <div class="valid-date">
            <h6 class="text-white">Security Code</h6>
            <h5 class="text-white">
                {{ @$userWallet->security_code }}
            </h5>
        </div>
    </div>
</div>
