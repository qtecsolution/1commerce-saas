<div class="col-12 p-0">
    @if ($errors->any())
        <div class="alert bg-primary text-light my-2">
            <ul class="ml-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert bg-primary text-light my-2">
            {{ session('message') }}
        </div>
    @endif
</div>
