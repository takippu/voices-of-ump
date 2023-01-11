
<div class="flex">

    @include('dashboard.components.sidebar')

    <!-- main content page -->
    <div class="w-full p-4">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Statistics</span></h1>

        <div class="px-4  mx-auto my-auto p-5 border border-gray-200 rounded-lg">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4 ">
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                      </svg>
                      
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    {{ $petitions_from_user->where('user_id', '=', Auth::user()->id)->count(); }}
                </h6>
                <p class="mb-2 font-bold text-md">Petition Posts</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                      </svg>
                                         
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    {{ $confessions_from_user->where('user_id', '=', Auth::user()->id)->count(); }}
                </h6>
                <p class="mb-2 font-bold text-md">Confession Posts</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    @php //count views
                        $totalViews=0;
                    @endphp
                    @forelse ($confessions_from_user->where('user_id', '=', Auth::user()->id) as $item)
                        
                        @php
                            $totalViews += $item->views;
                        @endphp
                        
                    @empty
                        
                    @endforelse
                    {{$totalViews}}
                     <!-- displayViews -->
                    
                </h6>
                <p class="mb-2 font-bold text-md">Confession Posts Viewed</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    @php //count views
                        $totalViewsPet=0;
                    @endphp
                    @forelse ($petitions_from_user->where('user_id', '=', Auth::user()->id) as $item)
                        
                        @php
                            $totalViewsPet += $item->views;
                        @endphp
                        
                    @empty
                        
                    @endforelse
                    {{$totalViewsPet}}
                     <!-- displayViews -->
                    
                </h6>
                <p class="mb-2 font-bold text-md">Petition Posts Viewed</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                      </svg>
                      
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    {{ $comments_from_user->where('user_id', '=', Auth::user()->id)->count(); }}
                </h6>
                <p class="mb-2 font-bold text-md">Comments</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                      </svg>
                      
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    {{ $likes_from_user->where('user_id', '=', Auth::user()->id)->count(); }}
                </h6>
                <p class="mb-2 font-bold text-md">Likes Given</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
              <div class="text-center border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 p-4">
                <div class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                      </svg>
                </div>
                <h6 class="text-4xl font-bold text-deep-purple-accent-400">
                    @php //count likes
                        $totalLikes=0;
                    @endphp
                    @forelse ($confessions_from_user->where('user_id', '=', Auth::user()->id) as $item)

                        @php
                            $totalLikes += $likes_from_user->where('post_id', '=', $item->id)->count();
                        @endphp
                        
                    @empty
                        
                    @endforelse
                    {{$totalLikes}} <!-- displaylikes -->
                    
                </h6>
                <p class="mb-2 font-bold text-md">Likes Received</p>
                <p class="text-gray-700">
                  It’s something that’s many of the wisest people in history have kept in mind.
                </p>
              </div>
            </div>
          </div>
    </div>
</div>