@extends('frontend.layouts.app')

@push('before-scripts')
<script>
  window.auth_user = {!! json_encode(Auth::user()) !!}
</script>
@endpush

@section('content')

@endsection
