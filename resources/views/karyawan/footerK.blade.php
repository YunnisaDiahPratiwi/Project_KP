    <script src="{{ asset ('sdadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('sdadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('sdadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset ('sdadmin2/js/sb-admin-2.min.js') }}"></script>

    <script src="{{asset('sdadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sdadmin2/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

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
