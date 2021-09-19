<!DOCTYPE html>
<html lang="en">

<head class="">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="/app.css" rel="stylesheet">
  <title>Biosphere Gameplay</title>
  @livewireStyles
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="max-h-screen">
  <x-nav></x-nav>
    {{$slot}}
  @livewireScripts
  <x-alert></x-alert>
</body>

</html>
