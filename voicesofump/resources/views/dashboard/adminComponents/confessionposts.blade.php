<div class="px-4  mx-auto my-autorounded-lg">
    <div class="sm:px-6 w-full pt">
                    <div class="px-1 md:px-10 pt-2 md:pt-7">
                        <div class="flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-xs md:text-lg lg:text-xl font-bold leading-normal text-gray-800">All Confession Posts</p>
                        </div>
                    </div>
                    <div class="bg-white px-4 md:px-8 xl:px-10 pb-4">
                        <div class="mt-7 overflow-auto rounded-lg shadow">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">
                                            ID
                                        </th>
                                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">
                                            Email
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            Title
                                        </th>
                                        <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">
                                            Timestamp
                                        </th>
                                        <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @forelse ($confessions_from_user as $conf)
                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="text-base font-medium text-center leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">{{$conf->id}}</span>
                                            </div>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="text-base font-medium text-center leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">{{$conf->user->email}}</span>
                                            </div>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="text-base font-medium text-center leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">{{$conf->title}}</span>
                                            </div>
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                                                  </svg>
                                                  
                                                  
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{$conf->created_at->diffForHumans()}}</p>
                                            </div>
                                            
                                        </td>
                                         <td class="p-3 text-sm text-gray-700">
                                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                            <a href="/confessions/{{$conf->id}}" class="text-sm leading-none text-green-600 py-3 px-5 bg-green-100  hover:bg-green-200 focus:outline-none">View</a>
                                            <a href="/confessions/{{$conf->id}}/edit" class="text-sm leading-none text-blue-700 py-3 px-5 bg-blue-100  hover:bg-blue-200 focus:outline-none">Edit</a>
                                            <form action="{{route('confessions.destroy', $conf->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')    
                                                <button type="submit" class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 hover:bg-red-200 ">Delete</button>
                                            </form>
                                            </div>
                                        </td> 
{{--                                         <td>
                                            <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script> <!-- if profile photo is enabled-->
                                            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                              </button>
                                              
                                              <!-- Dropdown menu -->
                                              <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>   
                                                      <a href="/confessions/{{$conf->id}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View</a>
                                                    </li>
                                                    <li>
                                                      <a href="/confessions/{{$conf->id}}/edit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{route('confessions.destroy', $conf->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')    
                                                            <button type="submit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</button>
                                                        </form>
                                                    </li>
                                                  </ul>
                                              </div>
                                            </td>
                                    </tr> --}}

                                    @empty
                                    <table class="w-full">
                                        <tbody>
                                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                                <td class="">
                                                    <div class="flex items-center pl-5 w-[500px] ">
                                                        <span class="text-base font-medium leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">There is no confessions..</span>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                            {{ $confessions_from_user->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
                <script src="./index.js"></script>
                <style>.checkbox:checked + .check-icon {
          display: flex;
        }
        </style>
                <script>function dropdownFunction(element) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                        list.classList.add("target");
                        for (i = 0; i < dropdowns.length; i++) {
                            if (!dropdowns[i].classList.contains("target")) {
                                dropdowns[i].classList.add("hidden");
                            }
                        }
                        list.classList.toggle("hidden");
                    }</script>
</div>