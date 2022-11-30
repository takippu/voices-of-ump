<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
          <div class="flex">
              <!-- Logo -->
              <div class="shrink-0 flex items-center">
                  <a href="{{ route('dashboard') }}">
                      <x-jet-application-mark class="block h-9 w-auto" />
                  </a>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                  <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                      {{ __('Dashboard') }}
                  </x-jet-nav-link>
                  <x-jet-nav-link href="{{ route('confessions.index') }}" :active="request()->routeIs('tasks.index')">
                      {{ __('Confessions') }}
                  </x-jet-nav-link>
              </div>
          </div>
      </div>
  </div>
         
</nav>
