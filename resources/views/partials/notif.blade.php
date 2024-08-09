@if (session('success'))
<script>
    Swal.fire({
    title: "Berhasil",
    text: "{{ session('success') }}",
    icon: "success",
    customClass: {
      confirmButton: 'custom-swal-button'
    },
    buttonsStyling: false
  });
</script>
@endif