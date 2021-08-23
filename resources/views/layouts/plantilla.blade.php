<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- favicon -->
<!-- estilos -->

</head>
<body>
  <!-- header -->
  <!-- nav -->
<header>
  <h1>Just Code Developers</h1>
  <nav>
    <ul>
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('lenguajes.index')}}">Lenguajes</a></li>
      <li><a href="{{route('nosotros')}}">Nosotros</a></li>
    </ul>
  </nav>
</header>

  @yield('content')
<!-- footer -->

<!-- script  -->

</body>
</html>
 