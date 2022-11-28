<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confessions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <!-- component -->
<section class="bg-neutral-50">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl">Browse Confessions</h1>
        
        <div class="items-center flex justify-between">
            <button onclick="window.location='{{route('confessions.create')}}'" class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-2 rounded ">
                Create a Confession
              </button>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            @forelse($confessions as $post)
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="./confessions/{{ $post->id }}" class="text-xl font-semibold text-gray-800 hover:underline ">
                        {{ucfirst($post->title)}}
                    </a>
                    
                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>
            @empty

            @endforelse

            

           
            
        </div>
    </div>
</section>


        </div>
    </div>
</x-app-layout>
