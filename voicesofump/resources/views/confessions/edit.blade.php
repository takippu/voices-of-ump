<x-app-layout>
  @if(Auth::user()->id == $confessions->user_id)
      @include('confessions.components.editComponent')
  @elseif(Auth::user()->roles == '0')
      @include('confessions.components.editComponent')
  @else
      {{abort(403)}}
  @endif
   
  
</x-app-layout>
