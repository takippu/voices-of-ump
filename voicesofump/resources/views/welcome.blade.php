<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="font-Mukta ">
    <!-- Header -->

    <header>
        <nav class="container flex items-center px-3 py-1">
            <div class="py-1"><img src="{{ asset('assets/img/logo.png')}}" alt="logo" width="200" height="200"></div>
            <ul class="hidden px-7 sm:flex flex-1 justify-start items-center gap-12 text-black uppercase text-xs">
                <li class="cursor-pointer">Petitions</li>
                <li class="cursor-pointer">Confessions</li>
                <li class="cursor-pointer">About</li>
            </ul>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-1 text-black uppercase text-xs">
                <button type="button" class="bg-slate-100 font-bold text-black rounded-md px-7 py-3">Login</button>
                <button type="button" class="bg-blue-700 font-bold  text-white rounded-md px-5 py-3"">Register</button>
            </ul>
        </nav>
    </header>
  

</body>
</html>