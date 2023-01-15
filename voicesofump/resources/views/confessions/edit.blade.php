@guest
  {{abort(403)}}
@endguest

@auth
<x-app-layout>

  @if(Auth::user()->id == $confessions->user_id) <!--if admin allow-->
    @include('confessions.components.editComponent')
  @elseif(Auth::user()->roles == '0')  <!--if owner of the post allow-->
    @include('confessions.components.editComponent')
  @else
    {{abort(403)}}
  @endif
   
  
</x-app-layout>
@endauth
    


