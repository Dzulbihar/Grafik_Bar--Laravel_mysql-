
<!DOCTYPE html>
<html lang="en">

<head>

@include('layouts.header')

</head>

<!-- <body class="hold-transition sidebar-mini"> -->
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

@include('layouts.navbar')

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

@include('layouts.sidebar')

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

@yield('content')

  </div>
  <!-- /.content-wrapper -->

@include('layouts.footer')


</div>
<!-- ./wrapper -->

@include('layouts.script')


</body>
</html>
