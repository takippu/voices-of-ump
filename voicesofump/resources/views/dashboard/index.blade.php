@guest
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>

<body>
  
</body>
@include('includes.footer')
</html>
@endguest



@auth
<x-app-layout>

  
    @include('dashboard.components.stats')
  

</x-app-layout>
@endauth