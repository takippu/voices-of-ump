<header>
    <nav class="container mx-auto max-w-none flex px-3 py-1 border border-b border-gray-200 items-center justify-between">
        <div class="py-1"><a href="/"><img src="{{ asset('assets/img/logo.png')}}" alt="logo" width="200" height="200"></div>
        <ul class="hidden px-7 sm:flex flex-1 justify-start items-center gap-12 text-black uppercase text-xs">
            <li class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"><a href="{{route('petitions.index')}}">
                Petitions
                </a></li>

            <li class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"><a href="{{route('confessions.index')}}">
                Confessions</a></li>
        
        </ul>
        @guest
        <ul class="hidden sm:flex flex-1 justify-end items-center gap-1 text-black uppercase text-xs">
            <a href=".././login"><button type="button" class="bg-slate-100 font-semibold text-black rounded-md px-7 py-3">Sign In</button></a>
            <!--<button type="button" class="bg-blue-700 font-semibold  text-white rounded-md px-5 py-3"">Register</button> -->
        </ul>
        @endguest
        @auth
        
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>


          
       
<button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-gray bg-white hover:bg-gray-100 focus:ring-1 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-gray dark:hover:bg-gray-200 dark:focus:ring-gray-300" type="button">{{auth()->user()->name}}<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-white">
    <ul class="py-1 text-sm text-black dark:text-black" aria-labelledby="dropdownDefault">
      <li>
        <a href="./user/profile" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-black">Profile</a>
      </li>
      <li> 
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        
        
        <a href="{{ route('logout') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-black" @click.prevent="$root.submit();">Log out</a>
        </form>
    </li>
    </ul>
</div>

        @endauth
        <div class="flex sm:hidden flex-1 justify-end">
            <i class="text-2xl fa-solid fa-bars"></i>
        </div>
    </nav>
</header>