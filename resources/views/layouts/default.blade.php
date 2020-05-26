<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Ebay App')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>

  <body>
    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
      </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>