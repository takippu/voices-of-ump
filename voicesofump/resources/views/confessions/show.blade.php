@guest
<html>
  <html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>
  <body class="flex flex-col min-h-screen">
    <article class="py-12 px-4">
      <h1 class="text-4xl text-center mb-4 font-semibold font-heading font-semibold">{{$confessions->title}}</h1>
      <p class="text-center">
        <span>{{$confessions->created_at}}, by</span>
        <a class="ml-1 text-indigo-600 hover:underline" href="#">{{ucFirst($confessions->user->name)}}</a>
        
      </p>
  
      <div class="max-w-3xl mx-auto mt-4">
        {!! $confessions->content !!}
      </div>
    </article>

  </body>
  @include('includes.footer')
</html>






@endguest

@auth
<x-app-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          

          <!-- component -->
<article class="py-12 px-4 ">
  <h1 class="text-4xl text-center mb-4 font-semibold font-heading font-semibold">{{$confessions->title}}</h1>
  
  <p class="text-center">

    <span>{{$confessions->created_at}}, by</span>
    <a class="ml-1 text-indigo-600 hover:underline" href="#">{{ucFirst($confessions->user->name)}}    
      
    </a>
    @if(auth()->user()->id == $confessions->user_id)
      
        <button onclick="window.location='/confessions/{{$confessions->id}}/edit'" class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-2 rounded ">
            Edit Post
          </button>
         <!-- <a class="text-center" href="/confessions/{{$confessions->id}}/edit">[Edit]</a> -->
      
      @endif
  </p>
  

  <div class="max-w-3xl mx-auto mt-4">
    {!! $confessions->content !!}
  </div>
</article>

          
      </div>
      
  </div>
  <div class="max-w-3xl mx-auto mt-4">
<form>
  <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
      <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
          <label for="comment" class="sr-only">Your comment</label>
          <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
      </div>
      <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
          <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
              Post comment
          </button>
          <div class="flex pl-0 space-x-1 sm:pl-2">
              <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Attach file</span>
              </button>
              <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Set location</span>
              </button>
              <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Upload image</span>
              </button>
          </div>
      </div>
  </div>
</form>
</div>

</x-app-layout>
@endauth