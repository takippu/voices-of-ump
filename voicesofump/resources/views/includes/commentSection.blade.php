<section class=" py-8 lg:py-16">

    <div class="max-w-2xl mx-auto px-4">
    @if(session('message')=='autherror' || session('message')=='autherrorreply')
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium">Not logged in!</span> Please log in first to comment.
        </div>
    @elseif(session('message')=='success')
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">Success!</span> Your comment has been sent.
        </div>
    @elseif(session('message')=='successreply')
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">Success!</span> Your reply has been sent.
        </div>
    @elseif(session('message')=='errorpost')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">Error!</span> Something went wrong. Please try again.
        </div>
    @elseif(session('message')=='errorreply')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-medium">Error!</span> Something went wrong. Please try again.
        </div>
    @elseif(session('message')=='nocomment' || session('message')=='noreply')
        <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
        <span class="font-medium">Warning!</span> Message can't be empty.
        </div>
    @endif
<form action="/confessions/{{$confessions->id}}/comment" method="POST">
  @csrf
  <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
      <div class="px-4 py-2 bg-white rounded-t-lg">
         <input type="hidden" value="{{$confessions->id}}" name="postID">
          <label for="comment" class="sr-only">Your comment</label>
          <textarea id="comment" name="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0  " placeholder="Write a comment..." required></textarea>
      </div>
      <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
          <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
              Post comment
          </button>
          
      </div>
</form>

  </div>
    @forelse ($confessions->comments as $comment)

        @include('includes.comment')
        
    @empty
   
        @include('includes.nocommentComponent')
    
    @endforelse

</div>
</section>
