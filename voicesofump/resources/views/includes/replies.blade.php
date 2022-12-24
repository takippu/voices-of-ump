
    <article class="p-6 ml-10 mb-6 text-base bg-white border-t border-gray-200 ">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 "><img
                        class="mr-2 w-6 h-6 rounded-full"
                        src="{{$reply->user->profile_photo_url }}"
                        alt="{{$reply->user->name}}">{{$reply->user->name}}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                        title="February 8th, 2022">{{$reply->created_at->diffForHumans()}}</time></p>
            </div>
            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 "
                type="button">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
                <span class="sr-only">Comment settings</span>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownComment1"
                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow ">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownMenuIconHorizontalButton">
                    @if (Auth::id() == $reply->user_id)

                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 ">Remove</a>
                    </li>
                    @else
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 ">Report</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </footer>
        <p class="text-gray-500 dark:text-gray-400">{{$reply->reply}}</p>
    
    
     
    
    </article>
