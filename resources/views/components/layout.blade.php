<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="/app.css" rel="stylesheet">
  <title>Biosphere Gameplay</title>
  @livewireStyles
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="bg-forest bg-no-repeat bg-center bg-cover h-screen">
  <x-nav></x-nav>
  <div class="w-full h-full flex flex-row items-center justify-center">
    {{$slot}}
  </div>
  @livewireScripts
  <x-alert></x-alert>
</body>

</html>
