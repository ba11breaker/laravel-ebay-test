<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Ebay App')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>

  <body>
    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @yield('content')
      </div>
    </div>
  </body>
</html>