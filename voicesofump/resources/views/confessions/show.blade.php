@guest
<html>
  <html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>
  <body class="flex flex-col min-h-screen">
    <article class="py-12 px-4">
      <h1 class="text-4xl text-center mb-4 font-semibold font-heading font-semibold">{{$confessions->title}}</h1>
      <p class="text-center">
        <span>{{$confessions->created_at}}, by</span>
        <a class="ml-1 text-indigo-600 hover:underline" href="#">{{ucFirst($confessions->user->name)}}</a>
        
      </p>
  
      <div class="max-w-3xl mx-auto">
        {!! $confessions->content !!}
      </div>
    </article>

  </body>
  @include('includes.footer')
</html>






@endguest

@auth
<x-app-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          

          <!-- component -->
<article class="py-12 px-4 ">
  <h1 class="text-4xl text-center mb-4 font-semibold font-heading font-semibold">{{$confessions->title}}</h1>
  
  <p class="text-center">

    <span>{{$confessions->created_at}}, by</span>
    <a class="ml-1 text-indigo-600 hover:underline" href="#">{{ucFirst($confessions->user->name)}}    
      
    </a>
    @if(auth()->user()->id == $confessions->user_id)
      
        <button onclick="window.location='/confessions/{{$confessions->id}}/edit'" class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-2 rounded ">
            Edit Post
          </button>
         <!-- <a class="text-center" href="/confessions/{{$confessions->id}}/edit">[Edit]</a> -->
      
      @endif
  </p>
  

  <div class="max-w-3xl mx-auto">
    {!! $confessions->content !!}
  </div>
</article>

          
      </div>
  </div>
</x-app-layout>
@endauth