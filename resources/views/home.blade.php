@extends('layout.base')

@section('body')

<header class="w-full min-h-screen bg-gradient-to-br from-gray via-white to-gray">
  <section class="relative container mx-auto min-h-screen flex justify-center items-center overflow-hidden">
    <div class="w-full flex flex-col gap-10 bg-red/30 z-20">
      <h2
        class="w-full text-6xl lg:text-6xl xl:text-7xl 2xl:text-[80px] leading-[96px] text-secondary text-center lg:text-start font-bold">
        ARE YOU LOOKING TO TRANSFORM?
      </h2>

      <p
        class="w-full text-2xl lg:text-xl xl:text-2xl 2xl:text-3xl leading-1.5 text-secondary text-center lg:text-start">
        Discover how our cutting-edge caching solutions can
        revolutionize your digital infrastructure
      </p>

      <div class="flex flex-row justify-center lg:justify-start items-center gap-5">
        <a class="btn bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg text-white lg:px-12 lg:py-4 border-0"
          href="#">
          Contact Us
        </a>

        <a class="btn bg-transparent hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg text-primary lg:px-12 lg:py-4 border-0 shadow-none"
          href="#">
          Contact Us
        </a>
      </div>
    </div>

    <div class="hidden lg:block w-full aspect-square">
      <img src="{{asset('img/logo/globe_logo.svg')}}" class="w-full h-full aspect-square" alt="Victory Arch ">
    </div>

    <div class="absolute lg:hidden w-[200vw] aspect-square overflow-hidden flex justify-center items-center">
      <img src="{{asset('img/logo/globe_logo_2.svg')}}" class="w-full aspect-square" alt="Victory Arch ">
    </div>


    <div class="absolute w-full bottom-10 flex justify-center text-primary animate-bounce">
      @svg('hugeicons-mouse-scroll-01')
    </div>
  </section>

</header>

<div class="w-full h-1 my-4 bg-red z-50"></div>

<section class="relative container mx-auto min-h-screen">
  <div class="w-full flex flex-col justify-center items-center">
    <h2 class="text-4xl text-black">The Journey of <span class="font-bold">"VICTORY"</span></h2>

    <div>
      <img src="{{asset('img/journey/j1.png')}}" alt="">
    </div>
  </div>
</section>

<div class="w-full h-1 my-4 bg-red z-50"></div>

@endsection