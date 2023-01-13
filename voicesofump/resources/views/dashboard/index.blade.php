@guest

@endguest



@auth
<x-app-layout>
    @if(auth()->user()->roles == 0)
        @include('dashboard.adminComponents.stats')
    @elseif(auth()->user()->roles == 1)
        @include('dashboard.components.stats')
    @else
        {{abort(403)}}
    @endif
  
    
  

</x-app-layout>
@endauth