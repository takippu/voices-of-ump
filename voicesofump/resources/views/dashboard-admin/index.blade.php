@guest

@endguest



@auth
<x-app-layout>
    @if(auth()->user()->roles == 0)
        IS ADMIN WOOHOO
    @else
        no admin :c
    @endif
  
    @include('dashboard.components.stats')
  

</x-app-layout>
@endauth