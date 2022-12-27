@guest
not allowed
@endguest
@auth
<x-app-layout>
    <div class="flex min-h-screen">

        @include('dashboard.components.sidebar')
        
        @include('dashboard.components.manageposts')
    </div>
</x-app-layout>
@endauth