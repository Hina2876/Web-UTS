<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dapoer Pipin – Catering Lezat & Higienis')</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('images/main.jpeg') }}">
  <link rel="shortcut icon" href="{{ asset('images/main.jpeg') }}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
  @stack('styles')
</head>
<body>

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
</body>
</html>
