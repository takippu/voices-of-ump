@guest
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>

<body>
  @include('petitions.components.componentPost')
</body>
@include('includes.footer')
</html>
@endguest
{{-- --}}
@auth
<x-app-layout>

  @include('petitions.components.componentPost')

</x-app-layout>
@endauth