<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <!-- component -->
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

            
        </div>
    </div>
</x-app-layout>
