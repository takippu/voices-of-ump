@guest
<html>
  <html lang="en">
    <head>
        @include('includes.header')
        @include('includes.head')
    </head>
  <body class="flex flex-col min-h-screen">
    <article class="py-12 px-4">
      <h1 class="text-4xl text-center mb-4 font-heading font-semibold">{{$confessions->title}}</h1>
      <p class="text-center">
        <span>{{$confessions->created_at->diffForHumans()}}, by</span>
        <a class="ml-1 text-indigo-600 hover:underline" href="#">{{ucFirst($confessions->user->name)}}</a>
        
      </p>
  
      <div class="max-w-3xl mx-auto mt-4">
        {!! $confessions->content !!}
      </div>
    </article>

    @include('includes.commentSection')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="{{ asset('/js.js') }} "></script>
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
  <h1 class="text-4xl text-center mb-4 font-heading font-semibold">{{$confessions->title}}</h1>
  
  <p class="text-center">

    <span>{{$confessions->created_at->diffForHumans()}}, by</span>
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
            <!-- Likes form start -->

             
              <div class="flex items-center px-3 py-2 rounded-lg">
                @if($message =='dahlike')
                <form method="POST" action="/confessions/{{$confessions->id}}/dislikes">
                  @csrf
                  @method('DELETE')    
                  <input type="hidden" value="{{$confessions->id}}" name="postID">
                  <input type="hidden" value="{{$confessions->id}}" name="likeID">
                <button type="submit" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M15.73 5.25h1.035A7.465 7.465 0 0118 9.375a7.465 7.465 0 01-1.235 4.125h-.148c-.806 0-1.534.446-2.031 1.08a9.04 9.04 0 01-2.861 2.4c-.723.384-1.35.956-1.653 1.715a4.498 4.498 0 00-.322 1.672V21a.75.75 0 01-.75.75 2.25 2.25 0 01-2.25-2.25c0-1.152.26-2.243.723-3.218C7.74 15.724 7.366 15 6.748 15H3.622c-1.026 0-1.945-.694-2.054-1.715A12.134 12.134 0 011.5 12c0-2.848.992-5.464 2.649-7.521.388-.482.987-.729 1.605-.729H9.77a4.5 4.5 0 011.423.23l3.114 1.04a4.5 4.5 0 001.423.23zM21.669 13.773c.536-1.362.831-2.845.831-4.398 0-1.22-.182-2.398-.52-3.507-.26-.85-1.084-1.368-1.973-1.368H19.1c-.445 0-.72.498-.523.898.591 1.2.924 2.55.924 3.977a8.959 8.959 0 01-1.302 4.666c-.245.403.028.959.5.959h1.053c.832 0 1.612-.453 1.918-1.227z" />
                  </svg>   
                                    Dislike this post.
                </button>
              </form>
                @else
                <form method="POST" action="/confessions/{{$confessions->id}}/likes">
                  @csrf
                  
                  <input type="hidden" value="{{$confessions->id}}" name="postID">
                <button type="submit" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                  </svg>
                                    Like this post.
                </button>
                </form>
                @endif
              </div>
         
          

          <!-- Likes form end -->
          
      </div>
      
  </div>


@include('includes.commentSection')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
<script src="{{ asset('/js.js') }} "></script>
</x-app-layout>
@endauth