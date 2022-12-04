<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <!-- Hero -->
    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
            <!--Content -->
            <div class="flex flex-1 flex-col items-center lg:items-center">
                <div>
                    <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">"Let your voice be heard."</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600 sm:text-center">Don't be silent. Express yourself. Let yourself be heard.</p>
                    <div class="mt-8 flex gap-x-4 sm:justify-center">
                      <a href="./register" class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                        Get started
                        <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                      </a>
                    </div>
                  </div>
            </div>
        </div>
        
    </section>
    <!-- Petitions -->
    <section class="relative">
        <div class="container flex mt-9 ml-9">
            <p class="text-slate-900 tracking-wide text-xl font-bold leading-relaxed">Recent Petitions</p>
            <a class="text-blue-600" href="{{ route('petitions.index') }}"> Browse All </a>
        </div>
        <div class="container flex flex-col-reverse lg:flex-row items-stretch gap-12 mt-5 lg:mt-15">
            @include('includes.petitions')
        </div>
        
    </section>

    <!-- Confessions -->
    <section class="relative">
        <div class="container flex mt-9 ml-9">
            <p class="text-slate-900 tracking-wide text-xl font-bold leading-relaxed">Recent Confessions</p>
            <a class="text-blue-600" href="{{ route('confessions.index') }}"> Browse All </a>
        </div>
        <div class="container flex flex-col-reverse lg:flex-row items-stretch gap-12 mt-5 lg:mt-15">
            @include('includes.confessions')
        </div>
        
    </section>


</body>
    @include('includes.footer')
</html>