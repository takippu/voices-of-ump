<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-Mukta ">
    <!-- Header -->

    <header>
        <nav class="container flex items-center px-3 py-1">
            <div class="py-1"><img src="{{ asset('assets/img/logo.png')}}" alt="logo" width="200" height="200"></div>
            <ul class="hidden px-7 sm:flex flex-1 justify-start items-center gap-12 text-black uppercase text-xs">
                <li class="cursor-pointer font-bold">Petitions</li>
                <li class="cursor-pointer font-bold">Confessions</li>
                <li class="cursor-pointer font-bold">About</li>
            </ul>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-1 text-black uppercase text-xs">
                <button type="button" class="bg-slate-100 font-semibold text-black rounded-md px-7 py-3">Login</button>
                <button type="button" class="bg-blue-700 font-semibold  text-white rounded-md px-5 py-3"">Register</button>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-2xl fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>
    <!-- Hero -->
    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
            <!--Content -->
            <div class="flex flex-1 flex-col items-center lg:items-center">
                <h2 class="first-letter:text-neutral-800 text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                    "Let your voice be heard."
                </h2>
                <p class="text-stone-500 text-lg text-center lg:text-left mb-6">
                    Thousand of voices left unheard. Don't be one. 
                </p>
            </div>
        </div>
    </section>

    <!-- Petitions -->
    <section class="bg-white py-5 mt-5 lg:mt-5 relative">
        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-5 px-2 items-start">
            <h1 class="text-xl font-semibold text-start text-gray-900 "> Petitions </h1>
        
        </div>
    </section>
    <!-- Confessions -->
    <section class="bg-white py-5 mt-5 lg:mt-5 relative">
        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-5 px-2 items-start">
            <h1 class="text-xl font-semibold text-start text-gray-900 "> Confessions </h1>
        
        </div>
    </section>

    <!-- Footer -->
    <footer class=" py-8 bg-blue-600">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
                <img src="{{ asset('assets/img/logo.png')}}" alt="logo" width="200" height="200">
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer"> About</li>
                    <li class="cursor-pointer"> Contact Us</li>
                </ul>
            </div>
            <div class="flex gap-10 px-7 mt-12 md:mt-0 ">
                <li class="list-none"><i class=" text-white text-2xl fa-brands fa-linkedin"></i></li>
                <li class="list-none"><i class=" text-white text-2xl fa-brands fa-twitter"></i></li>
            </div>
        </div>
    </footer>
</body>
</html>