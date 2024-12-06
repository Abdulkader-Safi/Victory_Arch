<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Victory Arch</title>

  <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-theme="mytheme" class="w-full flex flex-col justify-start items-center min-h-[200vh]">

  @livewire('navbar')

  @yield('body')

</body>

</html>