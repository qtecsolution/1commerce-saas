@if (config('sweetalert.alwaysLoadJS') === true && config('sweetalert.neverLoadJS') === false)
    <script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endif
@if (Session::has('alert.config'))
    @if (config('sweetalert.animation.enable'))
        <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
    @endif
    @if (config('sweetalert.alwaysLoadJS') === false && config('sweetalert.neverLoadJS') === false)
        <script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @endif
    <script>
        Swal.fire({!! Session::pull('alert.config') !!});
    </script>
@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Define the global function for SweetAlert confirmation
    function addConfirmationToElements(selector) {
        document.querySelectorAll(selector).forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action (navigation)

                // Get the confirmation text from the data attribute
                const confirmationText = element.getAttribute('data-confirmation-text');

                Swal.fire({
                    title: "Are you sure?",
                    text: confirmationText,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Confirm"
                }).then((result) => {
                    if (result.isConfirmed) {
                        if (element.closest('form')) {
                            // Submit the form if confirmed
                            element.closest('form').submit();
                        } else {
                            // If confirmed, navigate to the link
                            window.location.href = element.href;
                        }
                    }
                });
            });
        });
    }

    // Use the function to add confirmation to elements with the class 'confirmable'
    document.addEventListener('DOMContentLoaded', function() {
        addConfirmationToElements('.confirmable');
    });
</script>
