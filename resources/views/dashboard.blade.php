<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ateneo Forum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 text-gray-900">
                   <h1>
                    Welcome back {{ Auth::user()->name }}
                   </h1>
                </div>
            </div>


            <div class="max-w-full ">
                <x-grid>
                    <x-post />
                    <x-post />
                    <x-post />
                    <x-post />
                    <x-post />
                </x-grid>

            </div>

        </div>
    </div>
</x-app-layout>
