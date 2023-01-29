@guest
{{abort(403)}}
@endguest

@auth
<x-app-layout>

    @can('isAdmin')
    <div class="flex min-h-screen">

        @include('dashboard.adminComponents.sidebar')
        @include('dashboard.adminComponents.users-list')
        </div>
        </div>
    </div>
    <!-- isAdmin -->

    @endcan

    @can('isUser')

        {{abort(403)}}

    @endcan

</x-app-layout>
@endauth