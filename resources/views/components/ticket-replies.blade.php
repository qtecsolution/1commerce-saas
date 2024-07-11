<div class="card">
    <div class="card-header py-2">
        <h3 class="mb-0">
            @if ($message->parent_id == 1)
                Support
            @else
                @if (auth()->user()->is_admin)
                    Customer
                @else
                    You
                @endif
            @endif
            <small class="text-muted small">({{ $message->created_at->diffForHumans() }})</small>
        </h3>
    </div>
    <div class="card-body">
        <div>
            <p>
                {{ $message->message }}
            </p>
        </div>
        @if ($message->attachments)
            <hr>
            <h6>Attachment:
                <a href="{{ asset('storage/' . $message->attachments) }}" target="_blank" class="edit-icon py-1 ml-2" title="Download">
                    Download
                    <i class="fa fa-download ms-2"></i>
                </a>
            </h6>
        @endif
    </div>
</div>
