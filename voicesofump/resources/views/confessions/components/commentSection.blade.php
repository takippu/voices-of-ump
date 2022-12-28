<section class=" py-8 lg:py-16">

    <div class="max-w-2xl mx-auto px-4">  
    
        @include('confessions.components.sessionMessage')

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
