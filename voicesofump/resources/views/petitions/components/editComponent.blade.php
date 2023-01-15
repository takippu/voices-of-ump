<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Petitions') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <!--
This example requires some changes to your config:

```
// tailwind.config.js
module.exports = {
// ...
plugins: [
  // ...
  require('@tailwindcss/forms'),
],
}
```
-->
@if(session()->has('message'))
<div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 mb-7" role="alert">
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
    <p>Successfully edit your petition.</p>
</div>
@endif
<div>


<div class="md:grid md:grid-cols-3 md:gap-6">
  <div class="md:col-span-1">
    <div class="px-4 sm:px-0">

      

      <h3 class="text-lg font-medium leading-6 text-gray-900">Edit your petition</h3>
      <p class="mt-1 text-sm text-gray-600">bla blabla share what you want</p>
    </div>
  </div>
  <div class="mt-5 md:col-span-2 md:mt-0">

    <form action="" method="POST">
        @csrf
        @method('PUT')
      <div class="shadow sm:overflow-hidden sm:rounded-md">
        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="petitions-title" class="block text-sm font-medium text-gray-700">Title</label>
              <div class="mt-1 flex rounded-md shadow-sm">

                <input type="text" name="title" id="title" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Write a title..." value="{{$petitions->title}}">
                
                @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            </div>
          </div>

          <div>
            <label for="about" class="block text-sm font-medium text-gray-700">Content</label>
            <div class="mt-1">
              <textarea id="content" name="content" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="It was a sunny day....">{{$petitions->content}}</textarea>
              @error('content')
                            <p class="text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            
          </div>

        

          <div>
            <label class="block text-sm font-medium text-gray-700">Photo</label>
            <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="goals" class="flex text-sm font-medium text-gray-700">Signature Goals</label>


                <input type="number" name="goals" id="goals" class="flex w-full rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Place your goals..." value="{{$petitions->signature_goals}}">
                @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

          </div>
        </div>
        
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">

        
          <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Confirm Edit</button>
        </form>
          <form action="{{route('petitions.destroy', $petitions->id)}}" method="POST">
            @csrf
            @method('DELETE')    
          <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete Post</button>
        </form>
        </div>
      </div>
  
    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
    
    </div>
  </div>
</div>
</div>

<div class="hidden sm:block" aria-hidden="true">
<div class="py-5">
  <div class="border-t border-gray-200"></div>
</div>
</div>



    </div>
</div>