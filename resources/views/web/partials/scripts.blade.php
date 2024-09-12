<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{ asset('web/assets/js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('web/assets/js/main.js') }}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

@if (session('success'))
    toastr["success"]({{ session('success') }});
@endif
@if (session('error'))
    toastr["error"]({{ session('error') }});
@endif
</script>