
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{secure_asset('img/favicon.png')}}" rel="icon">
  <link href="{{secure_asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{secure_asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{secure_asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{secure_asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{secure_asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{secure_asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{secure_asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ secure_asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ secure_asset('css/style.css')}}" rel="stylesheet">

    <title>Stock</title>
</head>
<body>
    @include('stock.layouts.header')
    @include('stock.layouts.panel')

    @yield('main')

    @include('stock.layouts.footer')
    




  <!-- Vendor JS Files -->

    <script src="{{secure_asset('/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{secure_asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{secure_asset('/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{secure_asset('/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{secure_asset('/vendor/quill/quill.min.js')}}"></script>
    <script src="{{secure_asset('/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{secure_asset('/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{secure_asset('/vendor/php-email-form/validate.js')}}"></script>
   
    <!-- Template Main JS File -->
    <script src="{{secure_asset('/js/main.js')}}"></script>
    
    
  
</body>
</html>
