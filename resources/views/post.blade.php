<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 text-gray-900">
                    <h1>
                        Welcome back {{ Auth::user()->name }}
                    </h1>
                </div>
            </div>

            <x-post-form />


        </div>
    </div>
</x-app-layout>
