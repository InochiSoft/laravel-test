<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME', 'HUNTBAZAAR' ) }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('plugin/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('plugin/admin-lte/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{url('plugin/datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugin/datatables/Select-1.3.3/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugin/datatables/Buttons-1.7.0/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugin/datatables/Responsive-2.2.7/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{url('plugin/datatables/Responsive-2.2.7/css/responsive.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $title }}</h1>
                    </div>
                    {{--
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Widgets</li>
                        </ol>
                    </div>
                    --}}
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('container')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->

    @include('partials.footer')
</div>
<!-- ./wrapper -->

<div class="modal modal-danger fade" id="dialog-delete">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <form method="post" id="form-delete">
            @method('delete')
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Delete Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-error-body">
                    <input type="hidden" id="del-checkup-id" name="del-checkup-id" data-field="id">
                    Are you sure want to delete this data?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" name="action" class="btn btn-outline-danger" value="delete">Yes</button>
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- jQuery -->
<script src="{{url('plugin/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('plugin/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{url('plugin/datatables/DataTables-1.10.24/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugin/datatables/DataTables-1.10.24/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugin/datatables/Select-1.3.3/js/dataTables.select.min.js')}}"></script>
<script src="{{url('plugin/datatables/DateTime-1.0.3/js/dataTables.dateTime.min.js')}}"></script>
<script src="{{url('plugin/datatables/Buttons-1.7.0/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugin/datatables/Responsive-2.2.7/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugin/datatables/Responsive-2.2.7/js/responsive.bootstrap4.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{url('plugin/admin-lte/js/adminlte.min.js')}}"></script>
<script>
    $(function () {
        $(".datatable").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $(document).on('click', '.btn-item-delete', function(event) {
            event.preventDefault();
            let url = $(this).attr('data-attr');
            $('#form-delete').attr('action', url);
        });
    });
</script>
</body>
</html>
