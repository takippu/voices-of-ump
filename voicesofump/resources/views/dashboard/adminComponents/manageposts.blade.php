    <!-- main content page -->
    <div class="w-full p-4">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Manage Posts</span></h1>
        @include('dashboard.adminComponents.confessionposts')
        <div class="m-5 border border-double bg-gray-300 hover:bg-blue-700 "> </div>
        @include('dashboard.adminComponents.petitionposts')
    </div>