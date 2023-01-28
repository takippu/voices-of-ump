<div class="p-10 grid grid-flow-row grid-cols-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-5">
   
   
    @forelse($petitions->reverse() as $post)
        @if($loop->iteration == 6)
            @break
        @endif
             <!--Card -->
        <div class="rounded overflow-hidden shadow-lg">
        <!-- check if post have image or not -->
        @if (empty($post->image_path))

        <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{asset('assets/img-posts/'.rand(1,10).'.png')}}" alt="">

        @else
        <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{$post->image_path}}" alt="">
        @endif

        <div class="px-6 py-4">
       <a href="./petitions/{{ $post->id }}" class="text-xl font-semibold text-gray-800 hover:underline ">
           {{ucfirst($post->title)}}
       </a>
       <p class="text-gray-700 text-base">
             
        </div>
        
          </div>
    @empty

    @endforelse
     
  </div>
</div>