@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'Success!',
                text: @json(session('success')),
                icon: 'success',
                confirmButtonText: 'OK',
                timer: 3000,
                timerProgressBar: true,
            });
        });
    </script>
@endif

@if($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'Oops!',
                text: @json($errors->first()),
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        });
    </script>
@endif
