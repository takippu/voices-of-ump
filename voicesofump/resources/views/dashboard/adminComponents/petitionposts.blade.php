<div class="px-4  mx-auto my-autorounded-lg">
    <div class="sm:px-6 w-full pt">
                    <div class="px-1 md:px-10 pt-2 md:pt-7">
                        <div class="flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-xs md:text-lg lg:text-xl font-bold leading-normal text-gray-800">All Petitions Posts</p>
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
                                    @forelse ($petitions_from_user as $conf)
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
                                            <a href="/petitions/{{$conf->id}}" class="text-sm leading-none text-green-600 py-3 px-5 bg-green-100  hover:bg-green-200 focus:outline-none">View</a>
                                            <a href="/petitions/{{$conf->id}}/edit" class="text-sm leading-none text-blue-700 py-3 px-5 bg-blue-100  hover:bg-blue-200 focus:outline-none">Edit</a>
                                            <form action="{{route('petitions.destroy', $conf->id)}}" method="POST">
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
                                                        <span class="text-base font-medium leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">There is no petitions..</span>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                            {{ $petitions_from_user->appends(['confessions'=> $confessions_from_user->currentPage()])->links('pagination::tailwind') }}
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



{{-- below is backup
    <div class="px-4  mx-auto my-autorounded-lg">
    <div class="sm:px-6 w-full pt">
                    <div class="px-1 md:px-10 pt-2 md:pt-7">
                        <div class="flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-xs md:text-lg lg:text-xl font-bold leading-normal text-gray-800">Petition Posts</p>
                        </div>
                    </div>
                    <div class="bg-white px-4 md:px-8 xl:px-10 pb-4">
                        <div class="mt-7 overflow-x-auto">
                            <table class="w-full">
                                <tbody>
                                    @forelse ($petitions_from_user as $pett)

                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                        <td class="">
                                            <div class="flex items-center pl-5 w-[500px] ">
                                                <span class="text-base font-medium leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">{{$pett->title}}</span>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                                  </svg>                                                  
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{$pett->signs->count()}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M3.33331 17.4998V6.6665C3.33331 6.00346 3.59671 5.36758 4.06555 4.89874C4.53439 4.4299 5.17027 4.1665 5.83331 4.1665H14.1666C14.8297 4.1665 15.4656 4.4299 15.9344 4.89874C16.4033 5.36758 16.6666 6.00346 16.6666 6.6665V11.6665C16.6666 12.3295 16.4033 12.9654 15.9344 13.4343C15.4656 13.9031 14.8297 14.1665 14.1666 14.1665H6.66665L3.33331 17.4998Z" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M10 9.1665V9.17484" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M6.66669 9.1665V9.17484" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M13.3333 9.1665V9.17484" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <p class="text-sm leading-none text-gray-600 ml-2">
                                                    {{$pett->opinions->count()}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                                                  </svg>
                                                  
                                                  
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{$pett->created_at->diffForHumans()}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-4">
                                            <a href="/confessions/{{$pett->id}}" class="text-sm leading-none text-green-600 py-3 px-5 bg-green-100 rounded hover:bg-green-200 focus:outline-none">View</a>
                                        </td>
                                        <td class="pl-4">
                                            <a href="/confessions/{{$pett->id}}/edit" class="text-sm leading-none text-blue-700 py-3 px-5 bg-blue-100 rounded hover:bg-blue-200 focus:outline-none">Edit</a>
                                        </td>

                                        <td class="pl-5">
                                           
                                            <form action="{{route('confessions.destroy', $pett->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')    
                                                <button type="submit" class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 hover:bg-red-200 rounded">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @empty <!-- empty -->
                                    <table class="w-full">
                                        <tbody>

        
                                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                                <td class="">
                                                    <div class="flex items-center pl-5 w-[500px] ">
                                                        <span class="text-base font-medium leading-none text-gray-700 mr-1 hover:text-blue-600 truncate">You've not made any petition so far...</span>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</div> --}}