<!DOCTYPE html>
<html>

<head>
  <title>@yield('title', 'test App')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

  @include('layouts._header')
  <div class="container">
    @yield('content')
  </div>
  @include('layouts._footer')
</body>

</html>