<!DOCTYPE html>
<html lang="es">
 <!-- Sat, 27 Oct 2018 16:38:14 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Tecbrin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('node_modules/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="images/favicon.png" />
{{-- ------------------------------------- --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  {{-- <link rel="stylesheet" type="text/css" href="/responsiveTable/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('responsiveTable/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('responsiveTable/css/responsive.bootstrap4.min.css') }}">
  
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
  <link rel="manifest" href="{{ asset('manifest.json') }}"> 
  <meta name="theme-color" content="#3498db">

</head>

<body class="sidebar-fixed {{ auth()->user()->color_sidebar }}">
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php // include "modules/navbar.php"; ?>
    @include('modules.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_settings-panel.html -->
        <?php // include "modules/settingsPanel.php"; ?>
        @include('modules.settingsPanel')
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <?php //include "modules/sidebar.php"; ?>
        @include('modules.sidebar')
        <!-- partial -->
        <div class="content-wrapper p-1 p-sm-4">
            @yield('contenido')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php //include "modules/footer.php"; ?>
       @include('modules.footer')
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('responsiveTable/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- <script src="/responsiveTable/js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('responsiveTable/js/jquery.dataTables.min.js') }}"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>

  <script src="{{ asset('responsiveTable/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('responsiveTable/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('responsiveTable/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('responsiveTable/js/responsive.js') }}"></script>
  <script src="{{ asset('responsiveTable/js/dataTables.export.js') }}"></script>

  <script src="{{ asset('responsiveTable/js/jquery.tabletoxml.js') }}" type="text/javascript"></script>

{{-- -------------------- --}}
  {{-- <script src="/node_modules/jquery/dist/jquery.min.js"></script> --}}
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>


  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
  <script src="https://code.highcharts.com/highcharts.src.js"></script>  
  <script src="{{ asset('node_modules/exporting.js') }} "></script>
  <script src="{{ asset('node_modules/export-data.js') }}"></script>
  @yield('script')

</body>
</html>
