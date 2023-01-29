@guest
{{abort(403)}}
@endguest

@auth
<x-app-layout>

    @can('isAdmin')
    <div class="flex min-h-screen">

        @include('dashboard.adminComponents.sidebar')
        
        @include('dashboard.adminComponents.manageposts')
    </div>
    <!-- isAdmin -->

    @endcan

    @can('isUser')
        <div class="flex min-h-screen">

            @include('dashboard.components.sidebar')
            
            @include('dashboard.components.manageposts')
        </div>

    @endcan

</x-app-layout>
@endauth