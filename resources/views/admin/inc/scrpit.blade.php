    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="{{ asset('assets') }}/layouts/vertical-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('assets') }}/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('assets') }}/plugins/src/table/datatable/datatables.js"></script>

    <script src="{{ asset('assets') }}/plugins/src/table/datatable/datatables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });
    </script>
    <script>
        $('.delete-confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
    <script>
        $('.select2').select2();
    </script>
    <script>
        $(".alert").delay(4000).slideUp(500, function() {
            $(this).alert('close');
        });
    </script>
