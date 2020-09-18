<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blade Page Here :)</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <header>
      @include('parts.header')
    </header>
    <div class="container">
      @yield('content')
    </div>
    <footer>
    @include('parts.footer')
    </footer>
  </body>
</html>
