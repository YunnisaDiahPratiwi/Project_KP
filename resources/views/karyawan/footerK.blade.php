    {{-- <script src="{{ asset ('sdadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('sdadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('sdadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset ('sdadmin2/js/sb-admin-2.min.js') }}"></script>

    <script src="{{asset('sdadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sdadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script> --}}

    <script src="{{ asset('sdadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('sdadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sdadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sdadmin2/js/sb-admin-2.min.js') }}"></script>

    <!-- DataTables (cukup 1x) -->
    <script src="{{asset('sdadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sdadmin2/js/demo/datatables-demo.js')}}"></script>

    <!-- SweetAlert -->
    <script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#it_asset_id').select2({
                placeholder: "-- Pilih IT Asset --",
                allowClear: true,
                width: '100%'
            });
        });
    </script>


    @session('success')
        <script>
        Swal.fire({
            title: "Sukses!",
            text: "{{ session('success') }}",
            icon: "success"
        });
        </script>
    @endsession

    @session('error')
        <script>
        Swal.fire({
            title: "Gagal",
            text: "{{ session('error') }}",
            icon: "error"
        });
        </script>
    @endsession


</body>

</html>
