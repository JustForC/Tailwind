<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>@yield("title")</title>
  @livewireStyles()
</head>
<body class="bg-black">
    <div class="flex justify-center w-screen h-screen px-0 text-white">
    @yield("content")
    </div>
    @livewireScripts()
    @yield("javascript")
</body>
</html>