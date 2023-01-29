@guest
{{abort(403)}}
@endguest

@auth
<x-app-layout>

    @can('isAdmin')
    <div class="flex min-h-screen">

        @include('dashboard.adminComponents.sidebar')
        <div class="w-full p-4">
        <div class="flex items-center justify-center min-h-screen bg-gray-50">

            <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
                @if(session('message')=='add-success')
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">Success!</span> New admin has been added.
                </div>
                @endif
                <h3 class="text-2xl font-bold text-center">Add a new administrator</h3>
                <form action="{{ route('dashboard.storeAdmin') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <div>
                            <label class="block" for="Name">Name<label>
                                    <input type="text" id="name"name="name" placeholder="Name"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="mt-4">
                            <label class="block" for="email">Email<label>
                                    <input type="email" id="email" name="email" placeholder="Email"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="mt-4">
                            <label class="block">Password<label>
                                    <input type="password" id="password" name="password" placeholder="Password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="mt-4">
                            <label class="block">Confirm Password<label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <span class="text-xs text-red-400">Password must be same!</span>
                        <div class="flex">
                            <input
                            type="hidden"
                            id="roles"
                            name="roles"
                            value="0"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                          />
                            <button type="submit" class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                                Account</button>
                        </div>
    
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <!-- isAdmin -->

    @endcan

    @can('isUser')

        {{abort(403)}}

    @endcan

</x-app-layout>
@endauth