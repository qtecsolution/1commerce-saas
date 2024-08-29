<style>
    .ms-btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        cursor: pointer;
    }

    .ms-btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    /* .px-3 {
        padding-left: 1rem;
        padding-right: 1rem;
    } */

    .ms-btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }
</style>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #3e3e3e">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('templates.mine') }}" title="Back to Admin Panel">
            <i class="fas fa-arrow-left me-2"></i>
            ADMIN
        </a>
        <div>
            <div class="ms-btn ms-btn-light px-3 ms-btn-sm" title="Page Settings" data-bs-toggle="modal"
                data-bs-target="#pageSetupModal">
                Page Settings
            </div>
            <a href="{{ route('user_shop', $userTemplate->company_slug) }}" class="ms-btn ms-btn-light px-3 ms-btn-sm"
                target="_blank" title="Live Preview">
                Live Preview
            </a>
        </div>
    </div>
</nav>

<div class="modal fade" id="pageSetupModal" tabindex="-1" aria-labelledby="pageSetupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="pageSetupModalLabel">
                    Page Setup
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('templates.settings', $userTemplate->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div v-if="previewUrl" class="text-center">
                            @php
                                $photo = !$userTemplate->fav_icon
                                    ? asset('assets/images/default.png')
                                    : asset('storage/' . $userTemplate->fav_icon);
                            @endphp
                            <img src="{{ $photo }}" alt="Favicon Preview" id="faviconPreview"
                                class="img-fluid mb-3" width="50px" />
                        </div>
                        <label for="logoImageInput" class="form-label">
                            Favicon:
                            <small class="text-muted">
                                (Max size: 100 KB. 1:1 aspect ratio.)
                            </small>
                        </label>
                        <input type="file" accept="image/*" name="favicon" id="logoImageInput" class="form-control"
                            onchange="photoPreview(event, 'logoImageInput', 'faviconPreview')" />
                    </div>
                    <div class="form-group mb-2">
                        @php
                            $decodedData = json_decode($userTemplate->seoTags->tags);
                        @endphp
                        <label for="logoImageInput" class="form-label">
                            Site Title:
                        </label>
                        <input type="text" name="title" placeholder="Site Title" value="{{ $decodedData->title }}"
                            class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function photoPreview(event, id, previewId) {
        var input = document.getElementById(id);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = new Image();
                img.onload = function() {
                    var width = this.width;
                    var height = this.height;

                    if (width === height) {
                        // Valid 1:1 ratio photo
                        var image = document.getElementById(id);
                        image.src = URL.createObjectURL(event.target.files[0]);
                    } else {
                        event.target.value = '';
                        alert('Please upload a photo with equal width and height (1:1 ratio).');
                    }

                    var image = document.getElementById(previewId);
                    image.src = URL.createObjectURL(event.target.files[0]);
                };

                img.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
