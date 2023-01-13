@guest
not allowed
@endguest

@auth
<x-app-layout>
    @if (auth()->user()->roles == 0) <!-- isAdmin -->
        <div class="flex min-h-screen">

            @include('dashboard.adminComponents.sidebar')
            
            @include('dashboard.adminComponents.manageposts')
        </div>
    @else

        <div class="flex min-h-screen">

            @include('dashboard.components.sidebar')
            
            @include('dashboard.components.manageposts')
        </div>
    @endif

</x-app-layout>
@endauth