<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #3e3e3e">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('templates.mine') }}" title="Back to Admin Panel">
            <i class="fas fa-arrow-left me-2"></i>
            ADMIN
        </a>
        <div>
            <div class="btn btn-light px-3 btn-sm" title="Page Settings" data-bs-toggle="modal"
                data-bs-target="#seedeePageSetupModal">
                Page Settings
            </div>
            <a href="{{ route('user_shop', $userTemplate->company_slug) }}" class="btn btn-light px-3 btn-sm"
                target="_blank" title="Live Preview">
                Live Preview
            </a>
        </div>
    </div>
</nav>

<div class="modal fade" id="seedeePageSetupModal" tabindex="-1" aria-labelledby="seedeePageSetupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="seedeePageSetupModalLabel">
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
                    <button type="submit" class="btn btn-dark">
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
