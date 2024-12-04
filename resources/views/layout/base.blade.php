<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Victory Arch</title>

  <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body data-theme="mytheme" class="w-full flex flex-col justify-start items-center min-h-[200vh]">

  {{-- Navbar --}}
  <nav class="container fixed top-0 navbar z-50 h-4 py-8 px-0">
    <div class="navbar-start h-full">
      <img src="{{asset('img/logo/va_logo.svg')}}" alt="Victory Arch Logo">
    </div>

    <div class="navbar-center h-full">
      <ul class="menu menu-horizontal">
        <li class="text-primary"><a href="#">HOME</a></li>

        <li class="text-primary"><a href="#">ABOUT</a></li>

        <li class="text-primary">
          <details>
            <summary>SOLUTIONS</summary>
            <ul class="w-[250px]">
              <li class="w-full text-primary"><a href="#">Business Solutions</a></li>
              <li class="w-full text-primary"><a href="#">Hardware Products</a></li>
              <li class="w-full text-primary"><a href="#">Security</a></li>
              <li class="w-full text-primary"><a href="#">Infrastructure</a></li>
            </ul>
          </details>
        </li>

        <li class="text-primary"><a href="#">SHOWROOM</a></li>

        <li class="text-primary"><a href="#">CONTACT</a></li>

      </ul>
    </div>

    <div class="navbar-end h-full">
      <button
        class="btn bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg px-4 py-2 border-0 text-[#fff]">
        Start Project
      </button>
    </div>
  </nav>

  @yield('body')

</body>

</html>