<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MedeVolt Healthcare | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/icon.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
  <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
  <link href="{{asset('css/summernote.min.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet"> --}}
    <script src="{{asset('js/summernote.min.js')}}"></script>
</head>

<body>
  @include('partials.header')
  @include('partials.sidebar')
    @yield('content')
  @include('partials.footer')
  <script src="{{ asset('js/admin.js') }}"></script>
  <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
 <script>
     $(document).ready(function() {
         $('#summernote').summernote({
             height: 400, 
             placeholder: '',
         });
     });
   </script>
</body>
</html>