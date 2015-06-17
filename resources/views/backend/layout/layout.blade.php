<!DOCTYPE html>
<html>
@include('backend/layout/head')
<body class="skin-blue-light">
<div class="wrapper">
@include('backend/layout/header')

@include('backend/layout/menu')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@yield('content')
</div><!-- /.content-wrapper -->

@include('backend/layout/footer') 
</div>
<!-- ./wrapper -->

</body>
</html>