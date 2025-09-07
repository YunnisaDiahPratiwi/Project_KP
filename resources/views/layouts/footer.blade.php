

    <!-- jQuery -->
    <script src="{{ asset('sdadmin2/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('sdadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin -->
    <script src="{{ asset('sdadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- SB Admin 2 -->
    <script src="{{ asset('sdadmin2/js/sb-admin-2.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('sdadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('sdadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    {{-- <script src="{{asset('sdadmin2/js/demo/datatables-demo.js')}}"></script> --}}

    <!-- SweetAlert -->
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                paging: true,
                searching: true,
                ordering: true
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


