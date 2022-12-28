@if(session('message')=='autherror' || session('error')=='autherror')
<!-- Auth Failed -->
<div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert"> 
    <span class="font-medium">Not logged in!</span> Please log in to proceed.
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