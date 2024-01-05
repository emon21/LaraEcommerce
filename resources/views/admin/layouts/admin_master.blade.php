<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@stack('title')</title>
  {{-- <title>{{ config('app.name') }} - @yield('title')</title> --}}

  <!-- Google Font: Source Sans Pro -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

   <!-- Toastr Notification --->
   <link rel="stylesheet" href="{{ asset('backend') }}/plugins/toastr/toastr.min.css">

      <!-- Sweet Alert --->
   <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/sweetalert2/sweetalert2.min.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/sweetalert/sweet-alert.css">

   @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
<div class="wrapper">



  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>



  @guest

  @else

    <!-- Navbar Start -->
    @include('admin.layouts.admin_partial.topbar')
    <!-- Navbar End -->


    <!-- Main Sidebar Container Start -->
    @include('admin.layouts.admin_partial.sidebar')
    <!-- Main Sidebar Container End -->

  @endguest






  <!-- Content Wrapper. Contains page content -->

   @yield('admin_content')

  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- jQuery -->
{{-- <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script> --}}
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('backend') }}/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>
<!-- Select2 -->
<script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>

<!-- Toastr --->
<script src="{{ asset('backend') }}/plugins/toastr/toastr.min.js"></script>

<!-- sweet alert --->
<script src="{{ asset('backend') }}/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="{{ asset('backend') }}/plugins/sweetalert/sweetalert.min.js"></script>

{{-- {!! Toastr::message() !!} --}}
{{-- <script>
    Toastr::success(Session::get('message'));
</script> --}}
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //text editor for summernote js code

    $(function () {

    // Summernote
    $('#summernote').summernote([

        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100,
        lang: 'ko-KR' // default: 'en-US'
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]

    ]);

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
  </script>


    <!-- sweet alert js code -->

     {{-- before  logout showing alert message --}}
     <script>
        $(document).on("click", "#logout", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                    title: "Are You  Want To Logout?",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Logout!",
                    buttons:true,
                    dangerMode:true,
                   timer: 8000,
            }).then((result) => {
                if (result.isConfirmed) {

                        window.location.href = link;
                    }
            else{
                  Swal.fire("Not Logout");
                }
            });
           });
   </script>

    <!-- Sweet alert added message Js Code --->

    @if (Session::has('success'))
    <script>
            Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Category Added Successfully!!",
            showConfirmButton: false,
            timer: 1500
            });
    </script>
    @endif

    <!-- Sweet alert added message  Js Code --->



    <!-- Sweet alert Delete message Js Code --->

<script>


    // $(document).on("click", "#delete", function(e){
    //     e.preventDefault();
    //     var link = $(this).attr("href");
    //        swal({
    //          title: "Are you Want to delete?",
    //          text: "Once Delete, This will be Permanently Delete!",
    //          icon: "warning",
    //          buttons: true,
    //          dangerMode: true,
    //        })
    //        .then((willDelete) => {
    //          if (willDelete) {
    //               window.location.href = link;
    //          } else {
    //            swal("Safe Data!");
    //          }
    //        });
    //    });

    $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                        });
                        window.location.href = link;
                    }
            });
    });


</script>

    <!-- Sweet alert Delete message Js Code --->


    <!-- Toastr Notification Js Code --->

    <script>
        @if (Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}";

            switch(type){
                case 'info':
                //  toastr.options.timeOut = 10000;
                toastr.info("{{ Session::get('message') }}");
                break;

                case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

                case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

                case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
            }

        @endif
    </script>


{{-- Sweet Alert Pop Message Box --}}



  @stack('script')
</body>
</html>
