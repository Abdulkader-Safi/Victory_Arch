@extends('layout.base')

@section('body')

<header class="w-full min-h-screen bg-gradient-to-br from-gray via-white to-gray">
  <section class="relative lg:container mx-auto min-h-screen flex justify-center items-center overflow-hidden">
    <div class="container w-full flex flex-col gap-10 bg-red/30 z-20">
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
        <a class="btn bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg text-white px-4 py-1 lg:px-12 lg:py-4 border-0"
          href="#">
          Contact Us
        </a>

        <a class="btn bg-transparent focus:ring-1 focus:ring-secondary/50 rounded-lg text-primary lg:px-12 lg:py-4 border-0 shadow-none"
          href="#">
          Our Work
        </a>
      </div>
    </div>

    {{-- <div class="relative hidden lg:block w-full aspect-square overflow-visible">
      <div id="globe"
        class="absolute top-0 bottom-0 left-0 right-0 hidden w-full h-full overflow-visible aspect-square lg:flex justify-center items-center z-30">
      </div>
    </div> --}}

    <div class="hidden lg:block w-full aspect-square">
      <img src="{{asset('img/logo/globe_logo.svg')}}" class="w-full h-full aspect-square" alt="Victory Arch ">
    </div>

    <div class="absolute lg:hidden h-screen aspect-square overflow-hidden flex justify-center items-center">
      <img src="{{asset('img/logo/globe_logo_2.svg')}}" class="w-full aspect-square" alt="Victory Arch ">
    </div>

    <div class="absolute w-full bottom-10 flex justify-center text-primary animate-bounce">
      @svg('hugeicons-mouse-scroll-01')
    </div>
  </section>

</header>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="w-full flex flex-col justify-center items-center gap-4">
    <h2 class="text-4xl text-black text-center">The Journey of <span class="font-bold">"VICTORY"</span></h2>

    <div class="w-full overflow-hidden">
      <img src="{{asset('img/journey/j1.png')}}" alt="" class="w-full aspect-video object-cover">
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="flex justify-between items-center gap-6">
    <div class=" w-full flex flex-col justify-center items-center gap-3 pb-3 border-b-2 border-primary">
      <span class="text-5xl text-black">25</span>
      <h3 class="text-xl text-black">Years Of Experience</h3>
    </div>

    <div class=" w-full flex flex-col justify-center items-center gap-3 pb-3 border-b-2 border-primary">
      <span class="text-5xl text-black">3000</span>
      <h3 class="text-xl text-black">Clients</h3>
    </div>

    <div class=" w-full flex flex-col justify-center items-center gap-3 pb-3 border-b-2 border-primary">
      <span class="text-5xl text-black">1500</span>
      <h3 class="text-xl text-black">Projects Completed</h3>
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="w-full flex flex-col justify-center items-center gap-2">
    <h2 class="text-4xl text-black text-center">Our <span class="font-bold">Solutions</span></h2>
    <p class="text-base w-10/12 text-center text-t-gray">
      Our marketing and sales team follow research results and market studies to find out who needs our solutions the
      most. With this approach we know that our clients are ambitious organizations looking for success, improvements,
      upgrade, or security.
    </p>
  </div>

  <div class="w-full flex flex-col justify-center items-center gap-12 pt-12">
    <div class="w-full flex flex-row justify-center items-center gap-5">
      <div class="w-full flex flex-col justify-center items-start">
        <img src="{{asset('img/our-solutions/BusinessSolutions.png')}}" alt="" class="w-full h-full">
      </div>

      <div class="w-full flex flex-col justify-center items-start gap-3">
        <h3 class="text-5xl">Business Solutions</h3>

        <p class="text-base text-t-gray">
          We provide powerful solutions that will automate your current workflow and deliver the
          critical information required by the organization’s owners, decision makers, and responsibility holders
        </p>

        <a class="btn bg-primary/90 hover:bg-primary rounded-lg text-white px-6 py-4" href="#">
          Learn More
        </a>
      </div>
    </div>

    <div class="w-full flex flex-row-reverse justify-center items-center gap-5">
      <div class="w-full flex flex-col justify-center items-start">
        <img src="{{asset('img/our-solutions/HardwareProducts.png')}}" alt="" class="w-full h-full">
      </div>

      <div class="w-full flex flex-col justify-center items-start gap-3">
        <h3 class="text-5xl">Hardware Products</h3>

        <p class="text-base text-t-gray">
          Partnered with the top hardware manufacturers in the industry, we are dedicated to provide the most suitable
          hardware for your business which will accurately accelerate your enterprise daily operations
        </p>

        <a class="btn bg-primary/90 hover:bg-primary rounded-lg text-white px-6 py-4" href="#">
          Learn More
        </a>
      </div>
    </div>

    <div class="w-full flex flex-row justify-center items-center gap-5">
      <div class="w-full flex flex-col justify-center items-start">
        <img src="{{asset('img/our-solutions/Security.png')}}" alt="" class="w-full h-full">
      </div>

      <div class="w-full flex flex-col justify-center items-start gap-3">
        <h3 class="text-5xl">Security</h3>

        <p class="text-base text-t-gray">
          We provide a wide range of security solutions, from CCTV and ANPR cameras to vehicle tracking and access
          solutions. Our main objective is to ensure a secure environment for your organization
        </p>

        <a class="btn bg-primary/90 hover:bg-primary rounded-lg text-white px-6 py-4" href="#">
          Learn More
        </a>
      </div>
    </div>

    <div class="w-full flex flex-row-reverse justify-center items-center gap-5">
      <div class="w-full flex flex-col justify-center items-start">
        <img src="{{asset('img/our-solutions/Infrastructure.png')}}" alt="" class="w-full h-full">
      </div>

      <div class="w-full flex flex-col justify-center items-start gap-3">
        <h3 class="text-5xl">Infrastructure</h3>

        <p class="text-base text-t-gray">
          As part of ensuring the success of our implementations,we provide a unique infrastructure that ensures the
          optimal efficiency and effectiveness of the solution implemented
        </p>

        <a class="btn bg-primary/90 hover:bg-primary rounded-lg text-white px-6 py-4" href="#">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="w-full flex flex-col justify-center items-center gap-2">
    <h2 class="text-4xl text-black text-center">Our <span class="font-bold">Partners</span></h2>
  </div>

  <div class="w-full grid grid-cols-6 gap-4 pt-12">
    <div class="w-full">
      <img src="{{asset('img/partners/1.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/partners/2.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/partners/3.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/partners/4.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/partners/5.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/partners/6.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="w-full flex flex-col justify-center items-center gap-2">
    <h2 class="text-4xl text-black text-center">Get The <span class="font-bold">Right Solution</span></h2>
    <p class="text-base w-10/12 text-center text-t-gray">
      We will help a client's problems to develop the products they have with high quality
    </p>
  </div>

  <div class="w-full grid grid-cols-3 gap-4 pt-12">
    <div
      class="w-full aspect-square bg-bg-gray-primary hover:bg-bg-secondary rounded-lg flex flex-col justify-center items-center gap-4 p-6 duration-300 group">
      <span
        class="text-bg-secondary group-hover:text-light-gray rounded-full bg-bg-gray-secondary group-hover:bg-bg-primary w-40 h-40 p-6 duration-300">
        {{ svg('lucide-users-round') }}
      </span>
      <h3 class="font-bold text-2xl text-bg-secondary group-hover:text-light-gray duration-300">
        Increase Productivity
      </h3>
      <p class="w-full text-base text-center text-bg-secondary group-hover:text-light-gray duration-300">
        Our solutions enable organizations to achieve the highest level of productivity possible through automation
      </p>
    </div>

    <div
      class="w-full aspect-square bg-bg-gray-primary hover:bg-bg-secondary rounded-lg flex flex-col justify-center items-center gap-4 p-6 duration-300 group">
      <span
        class="text-bg-secondary group-hover:text-light-gray rounded-full bg-bg-gray-secondary group-hover:bg-bg-primary w-40 h-40 p-6 duration-300">
        {{ svg('lucide-history') }}
      </span>
      <h3 class="font-bold text-2xl text-bg-secondary group-hover:text-light-gray duration-300">
        Speed Up Performance
      </h3>
      <p class="w-full text-base text-center text-bg-secondary group-hover:text-light-gray duration-300">
        Integration between hardware and software is the secret of success
      </p>
    </div>

    <div
      class="w-full aspect-square bg-bg-gray-primary hover:bg-bg-secondary rounded-lg flex flex-col justify-center items-center gap-4 p-6 duration-300 group">
      <span
        class="text-bg-secondary group-hover:text-light-gray rounded-full bg-bg-gray-secondary group-hover:bg-bg-primary w-40 h-40 p-6 duration-300">
        {{ svg('lucide-notebook-pen') }}
      </span>
      <h3 class="font-bold text-2xl text-bg-secondary group-hover:text-light-gray duration-300">
        Make Right Decisions
      </h3>
      <p class="w-full text-base text-center text-bg-secondary group-hover:text-light-gray duration-300">
        With our security solutions and reporting features, organizational management can follow up on details they need
        to make the right decision
      </p>
    </div>

    <div
      class="w-full aspect-square bg-bg-gray-primary hover:bg-bg-secondary rounded-lg flex flex-col justify-center items-center gap-4 p-6 duration-300 group">
      <span
        class="text-bg-secondary group-hover:text-light-gray rounded-full bg-bg-gray-secondary group-hover:bg-bg-primary w-40 h-40 p-6 duration-300">
        {{ svg('lucide-hammer') }}
      </span>
      <h3 class="font-bold text-2xl text-bg-secondary group-hover:text-light-gray duration-300">
        Support & Maintenance
      </h3>
      <p class="w-full text-base text-center text-bg-secondary group-hover:text-light-gray duration-300">
        Our support team of engineers and programmers are dedicated to the success of your business
      </p>
    </div>

    <div
      class="w-full aspect-square bg-bg-gray-primary hover:bg-bg-secondary rounded-lg flex flex-col justify-center items-center gap-4 p-6 duration-300 group">
      <span
        class="text-bg-secondary group-hover:text-light-gray rounded-full bg-bg-gray-secondary group-hover:bg-bg-primary w-40 h-40 p-6 duration-300">
        {{ svg('lucide-settings') }}
      </span>
      <h3 class="font-bold text-2xl text-bg-secondary group-hover:text-light-gray duration-300">
        Complete Turnkey
      </h3>
      <p class="w-full text-base text-center text-bg-secondary group-hover:text-light-gray duration-300">
        We will save you from the hassle of disintegration by providing both hardware and software during implementation
      </p>
    </div>

    <div
      class="w-full aspect-square bg-bg-gray-primary hover:bg-bg-secondary rounded-lg flex flex-col justify-center items-center gap-4 p-6 duration-300 group">
      <span
        class="text-bg-secondary group-hover:text-light-gray rounded-full bg-bg-gray-secondary group-hover:bg-bg-primary w-40 h-40 p-6 duration-300">
        {{ svg('lucide-star') }}
      </span>
      <h3 class="font-bold text-2xl text-bg-secondary group-hover:text-light-gray duration-300">
        Create Success
      </h3>
      <p class="w-full text-base text-center text-bg-secondary group-hover:text-light-gray duration-300">
        All of what we provide from security, IT solutions, hardware and infrastructure is aimed to help managements
        achieve their objectives and succeed
      </p>
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="w-full flex flex-col justify-center items-center gap-2">
    <h2 class="text-4xl text-black text-center">Our <span class="font-bold">Clients</span></h2>
  </div>

  <div class="w-full grid grid-cols-5 gap-4 pt-12">
    <div class="w-full">
      <img src="{{asset('img/client/1.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/2.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/3.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/4.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/5.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/6.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/7.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/8.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/9.png')}}" class="w-full h-full grayscale hover:grayscale-0" alt="">
    </div>
    <div class="w-full">
      <img src="{{asset('img/client/10.png')}}" class="w-full h-ful grayscale hover:grayscale-0" alt="">
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

<section class="relative lg:container mx-auto">
  <div class="w-full flex flex-col justify-center items-center gap-4">
    <h2 class="text-secondary text-center text-7xl">ARE YOU LOOKING TO</h2>
    <h2 class="text-secondary text-center text-7xl">TRANSFORM?</h2>

    <div class="overflow-hidden pt-12">
      <a
        class="hidden lg:block bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg px-4 py-2 border-0 text-white">
        Contact Us
      </a>
    </div>
  </div>
</section>

<div class="w-full h-1 my-12 bg-red z-50"></div>

@endsection