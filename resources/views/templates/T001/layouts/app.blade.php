<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Fashi, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="/T001/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/themify-icons.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="/T001/css/style.css" type="text/css">
</head>
<body>
<div id="app">
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header-section></header-section>
  <!-- Header End -->

  @yield('content')
</div>

<!-- Scripts -->
@stack('before-scripts')
<script src="{{ mix('/frontend/js/manifest.js') }}" defer></script>
<script src="{{ mix('/vendor.js') }}" defer></script>
<script src="{{ mix('/T001/js/app.js') }}" defer></script>
<script src="/T001/js/jquery-3.3.1.min.js"></script>
<script src="/T001/js/jquery-ui.min.js"></script>
<script src="/T001/js/jquery.countdown.min.js"></script>
<script src="/T001/js/jquery.nice-select.min.js"></script>
<script src="/T001/js/jquery.zoom.min.js"></script>
<script src="/T001/js/jquery.dd.min.js"></script>
<script src="/T001/js/jquery.slicknav.js"></script>
<script src="/T001/js/owl.carousel.min.js"></script>
<script src="/T001/js/main.js"></script>
<script>
  window.menus = {!! json_encode($menus) !!}
</script>
@stack('after-scripts')
</body>
</html>
