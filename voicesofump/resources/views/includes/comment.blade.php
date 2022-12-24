<article class="p-6 mb-6 text-base bg-white border-t border-gray-200 ">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-900 "><img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="{{$comment->user->profile_photo_url }}"
                    alt="{{$comment->user->name}}">{{$comment->user->name}}</p>
            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                    title="February 8th, 2022">{{$comment->created_at->diffForHumans()}}</time></p>
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
            class="hidden z-10 w-25 bg-white rounded divide-y divide-gray-100 shadow ">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownMenuIconHorizontalButton">
                @if (Auth::id() == $comment->user_id)
                <li>
                    <form action="{{route('comment.destroy', [$confessions->id, $comment->id])}}" method="POST">
                            @csrf
                            @method('DELETE')    
                          <button type="submit" class="block py-2 px-4 hover:bg-gray-100 ">Remove</button>
                     </form>
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
    <p class="text-gray-500 dark:text-gray-400">{{$comment->comment}}</p>

    <div class="flex items-center mt-4 space-x-4">
        @if(Auth::check())
        <button type="button"
            id="showReplyForm-{{$comment->id}}"
            onclick="showReplyForm({{$comment->id}})"
            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            Reply
        </button>
        <button type="button"
            id="hideReplyForm-{{$comment->id}}"
            onclick="hideReplyForm({{$comment->id}})"
            class="hidden items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            Cancel Reply
         </button>
        @else
         
        @endif
        <button type="button"
            id="showreply-{{$comment->id}}"
            
            onclick="showReplies({{$comment->id}})"
            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            Show Replies
        </button>


        <button type="button"
            id="hidereply-{{$comment->id}}"
           
            onclick="hideReplies({{$comment->id}})"
            class="hidden items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            Hide Replies
        </button>
        
        <br>

    </div>

            <!-- Reply form start -->
            <form method="POST" action="/confessions/{{$confessions->id}}/reply" class="hidden" id="reply-form-{{$comment->id}}">
                @csrf
                <input type="hidden" value="{{$comment->id}}" name="comment_parent_id">
                <label for="reply" class="sr-only">Your message</label>
                <div class="flex items-center px-3 py-2 rounded-lg">
                    <textarea id="reply" name="reply" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                        <span class="sr-only">Send message</span>
                    </button>
                </div>
            </button>
            </form>

            <!-- Reply form end -->


    

</article>
<div id="replies-{{$comment->id}}" name="replies" class="hidden">
@forelse ($comment->replies as $reply)

    @include('includes.replies')

    
@empty
    @include('includes.noreplyComponent')
@endforelse
</div>
