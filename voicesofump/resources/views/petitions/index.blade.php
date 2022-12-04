@guest
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>

<body>
  @include('includes.componentPetition')
</body>
@include('includes.footer')
</html>
@endguest
{{-- --}}
@auth
<x-app-layout>

  @include('includes.componentPetition')

</x-app-layout>
@endauth