<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- 1) Token CSRF -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Logística Entrega</title>

  <!-- 2) Bulma y Leaflet CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  @stack('styles')
</head>
<body>
  <section class="section">
    <div class="container">
      @yield('content')
    </div>
  </section>

  <!-- JS globales -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  @stack('scripts')
</body>
</html>
