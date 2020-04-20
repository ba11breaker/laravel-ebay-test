<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Ebay App')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css' )}}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Ebay App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">Log In</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>