@guest
  {{abort(403)}}
@endguest

@auth
<x-app-layout>
  
  @if(Auth::user()->id == $petitions->user_id) <!--if admin allow-->
    @include('petitions.components.editComponent')
  @elseif(Auth::user()->roles == '0')   <!--if owner of the post allow-->
    @include('petitions.components.editComponent')
  @else
    {{abort(403)}}
  @endif
   
  
</x-app-layout>
@endauth
    


