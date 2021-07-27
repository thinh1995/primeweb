@extends('frontend.layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @foreach($templates as $template)
        <div class="col-md-4">
          <img width="300px" src="{{ asset('templates/' . $template->directory . '/thumbnail.jpg') }}" alt="">
        </div>
      @endforeach
    </div>
  </div>
@endsection

@push('before-scripts')
  <script>
    window.auth_user = {!! json_encode(Auth::user()) !!}
  </script>
@endpush
