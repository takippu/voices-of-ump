
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Confessions</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Here are the records of voices of our student. Here lies the bottled up feelings of our students. Here are the truth.</p>
        </div> 
        <div class="max-w-5xl mx-auto">
				<div class="flex flex-wrap -mx-2">
                    @forelse($confessions->reverse() as $post)
					<div class="w-full sm:w-1/2 md:w-1/3 self-stretch p-2 mb-2">
						<div class="rounded shadow-md h-full">
                            @if (empty($post->image_path))
							<a href="/confessions/{{$post->id}}"><img class="w-full m-0 rounded-t" src="{{asset('assets/img-posts/'.rand(1,10).'.png')}}" data-src="{{asset('assets/img-posts/'.rand(1,10).'.png')}}" width="960" height="500" alt="This post thumbnail"></a>
							@else
                            <a href="/confessions/{{$post->id}}"><img class="w-full m-0 rounded-t" src="{{asset('/'.$post->image_path)}}" data-src="{{asset('/'.$post->image_path)}}" width="960" height="500" alt="This post thumbnail"></a>
                            @endif
                            <div class="px-6 py-5">
								<div class="font-semibold text-lg mb-2"><a class="text-gray-900 hover:text-gray-700 " href="/confessions/{{$post->id}}">{{$post->title}}</a></div>
								<p class="text-gray-700 mb-1" title="Published date">{{$post->created_at->diffForHumans()}}</p>
								<p class="text-gray-800 truncate">{{$post->content}}</p>
							</div>
						</div>

                        
					</div>
                    @empty
                    @endforelse
				</div>
				<div class="mt-3 flow-root"><a href="javascript:void(0)" class="float-left bg-white font-semibold py-2 px-4 border rounded shadow-md text-gray-800 cursor-default text-opacity-75">Previous</a> <a href="/page/2/" class="float-right bg-white font-semibold py-2 px-4 border rounded shadow-md text-gray-800 cursor-pointer hover:bg-gray-100">Next</a></div>
			</div>
    </div>
    