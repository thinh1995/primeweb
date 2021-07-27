<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ mix('/T006/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-sm">
              <menu-component></menu-component>
            </div>
        </div>
    </div>
    @yield('content')
</div>

<!-- Scripts -->
@stack('before-scripts')
<script src="{{ mix('/frontend/js/manifest.js') }}" defer></script>
<script src="{{ mix('/vendor.js') }}" defer></script>
<script src="{{ mix('/T006/js/app.js') }}" defer></script>
<script>
  window.menus = {!! json_encode($menus) !!}
</script>
@stack('after-scripts')
</body>
</html>
