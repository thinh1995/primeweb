@extends('frontend.layouts.app')

@section('content')
  .c
  <iframe id="demo-iframe" src="http://{{ $demoSrc }}"></iframe>
@endsection

@push('before-scripts')
  <script>
    window.auth_user = {!! json_encode(Auth::user()) !!}
  </script>
@endpush

@push('css')
  <style>
    #demo-iframe {
      margin: 50px 0 0;
      width: 100%;
      height: 100%;
      padding: 0;
      border: none;
    }
  </style>
@endpush
