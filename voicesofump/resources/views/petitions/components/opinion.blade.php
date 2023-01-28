<article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900 ">
    <footer class="flex justify-between items-center mb-2 ">
        <div class="flex items-center">
            @if ($sign->opinions->anon == 'yes')
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                    <i class="fa-solid fa-user mr-4"></i>Anonymous</p>
            @else
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="{{ $sign->user->profile_photo_url }}"
                    alt="{{ucfirst($sign->user->name)}}">{{ucfirst($sign->user->name)}}</p>
                    
            @endif
            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                    title="February 8th, 2022">{{$sign->created_at->diffForHumans()}}</time></p>
                    <div class="ml-4">
                        <form method="POST" action="/petitions/{{$petitions->id}}/signs-delete/{{$sign->opinions->first()->id}}">
                            @csrf
                            @method('DELETE')  
                        <button type="submit" class="inline-block px-2 py-1 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                        </form>
                    </div>
        </div>
        <!-- Dropdown menu 
        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            type="button">
            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
            <span class="sr-only">Comment settings</span>
        </button>
        
        <div id="dropdownComment1"
            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownMenuIconHorizontalButton">
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                </li>
            </ul>
        </div>
        -->
    </footer>
    @if($sign->opinions->opinion == null)
         <p class="text-gray-500 dark:text-gray-400">This user hasn't leave their opinion...</p>
    @else
        <!-- <p class="text-gray-500 dark:text-gray-400">{{$sign->opinions->id}}</p> -->
        <p class="text-gray-500 dark:text-gray-400">{{$sign->opinions->opinion}}</p> 

    @endif
</article>   
<div class="w-auto border-b-2 border-gray-200"></div> 