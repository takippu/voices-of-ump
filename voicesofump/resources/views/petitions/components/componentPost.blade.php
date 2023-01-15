
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Petitions</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Make a difference with your signature. Your signature can create a ripple effect of change - join the petition campaign now!</p>
        <div class="pt-5">
            <a href="{{route('confessions.create')}}" class="inline-flex items-center justify-center px-4 py-1 text-base font-medium text-center text-blue-100 border border-blue-500 rounded-lg shadow-sm cursor-pointer hover:text-white bg-gradient-to-br from-red-500 via-indigo-500 to-indigo-500">
                                  <span class="relative">Make yours now</span>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-10">
                                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                  </svg>
            </a>
        </div>
        </div> 
        <div class="max-w-5xl mx-auto">
				<div class="flex flex-wrap pr-10">
                    @forelse($petitions as $post)
					<div class="w-full sm:w-1/2 md:w-1/3 self-stretch p-2 mb-2 rounded shadow-md hover:bg-gray-100">
						<div class="h-full ">
                            @if (empty($post->image_path))
							<a href="/petitions/{{$post->id}}"><img class="w-full m-0 rounded-t" src="{{asset('assets/img-posts/'.rand(1,10).'.png')}}" data-src="{{asset('assets/img-posts/'.rand(1,10).'.png')}}" width="960" height="500" alt="This post thumbnail"></a>
							@else
                            <a href="/petitions/{{$post->id}}"><img class="w-full m-0 rounded-t" src="{{asset('/'.$post->image_path)}}" data-src="{{asset('/'.$post->image_path)}}" width="960" height="500" alt="This post thumbnail"></a>
                            @endif
                            <div class="flex justify-around mt-2 font-light text-gray-500 border-b-2 border-gray-50">
                                <!--
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                        <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                      </svg>
                                                                         
                                      <span class="mx-2"> {{$post->views}}</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 001.33 0l1.713-3.293a.783.783 0 01.642-.413 41.102 41.102 0 003.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zM6.75 6a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 2.5a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" />
                                      </svg>                                      
                                      <span class="mx-2">{{$post->opinions->count()}}</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
                                      </svg>                                      
                                    <span class="mx-2">{{$post->signs->count()}}</span>
                                </div>
                                -->
                                {{$post->signs->count()}} people has signed this!
                            </div>
                            <div class="px-6 py-5">
								<div class="font-semibold text-lg mb-2"><a class="text-gray-900 hover:text-gray-700 " href="/petitions/{{$post->id}}">{{$post->title}}</a></div>
								<p class="text-gray-700 mb-1" title="Published date">{{$post->created_at->diffForHumans()}}</p>
								<p class="text-gray-800 truncate">{{$post->content}}</p>
							</div>
						</div>

                        
					</div>
                    @empty
                    @endforelse
				</div>
               
			</div>
            {{ $petitions->links('pagination::tailwind') }}
    </div>
    