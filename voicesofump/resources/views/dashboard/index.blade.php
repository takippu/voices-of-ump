@guest
    {{abort(403)}} 
@endguest



@auth
<x-app-layout>
    @can('isAdmin')
         @include('dashboard.adminComponents.stats')
    @endcan

    @can('isUser')
         @include('dashboard.components.stats')

    @endcan
  

</x-app-layout>
@endauth