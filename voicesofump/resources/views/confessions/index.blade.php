@guest
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>

<body>
  @include('confessions.components.componentPost')
</body>
@include('includes.footer')
</html>
@endguest



@auth
<x-app-layout>
  <section class="flex flex-row flex-wrap mx-auto">
    @include('confessions.components.componentPost')
  </section>
</x-app-layout>
@endauth