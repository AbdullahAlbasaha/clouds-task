<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        @include('admin.layouts.header')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
       @include('admin.layouts.sidebar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @section('content')
            @show
    </div>
    <!-- /.content-wrapper -->

  @include('admin.layouts.footer')
</body>
</html>
