<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>@yield('title')</title>
    @include('components.css.myCss')

    {{-- <link rel="shorcut icon" href="{{ url('assets/img/absensi.png') }}"> --}}
    
  {{-- link shere this --}}
  
  </head>
  <body class="mt-0">
    @include('components.navigasi.navbar')
      
    <div class="container">
      @yield('content')
    </div>


    @include('components.navigasi.footer')

    @include('components.js.script')

    

  </body>
</html>