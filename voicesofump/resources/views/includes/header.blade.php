<header>
    <nav class="container flex items-center px-3 py-1 border border-b border-gray-200">
        <div class="py-1"><a href="./"><img src="{{ asset('assets/img/logo.png')}}" alt="logo" width="200" height="200"></div>
        <ul class="hidden px-7 sm:flex flex-1 justify-start items-center gap-12 text-black uppercase text-xs">
            <li class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"><a href="#">Petitions
                </a></li>

            <li class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"><a href="{{route('confessions.index')}}">
                Confessions</a></li>
        
        </ul>
        <ul class="hidden sm:flex flex-1 justify-end items-center gap-1 text-black uppercase text-xs">
            <a href=".././login"><button type="button" class="bg-slate-100 font-semibold text-black rounded-md px-7 py-3">Sign In</button></a>
            <!--<button type="button" class="bg-blue-700 font-semibold  text-white rounded-md px-5 py-3"">Register</button> -->
        </ul>
        <div class="flex sm:hidden flex-1 justify-end">
            <i class="text-2xl fa-solid fa-bars"></i>
        </div>
    </nav>
</header>