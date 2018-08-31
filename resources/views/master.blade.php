<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('name') | MWITS Elect</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link type="text/css" rel="stylesheet" href="/css/app.css" media="screen,projection"/>
</head>
<body>
  @include('components.navbar')
  <div class="container">
    @yield('content')
    <div class="row top-buffer">
      <div class="col-12">
        <blockquote class="blockquote text-right">
          <p class="mb-0">Made with <img src="https://s.w.org/images/core/emoji/2.4/svg/2764.svg" alt="love" style="height: 17px; width: auto;">. Inspire by you</p>
          <footer class="blockquote-footer">Phumrapee Limpianchop</footer>
        </blockquote>
      </div>
    </div>
  </div>

  <script src="/js/app.js"></script>
</body>
</html>