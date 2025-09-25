<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 text-gray-900">
                    <h1>
                        You can see me
                    </h1>
                </div>
            </div>


            <div class="max-w-full ">
                <x-grid>
                    @foreach ($posts as $post)
                        <x-post :title="$post->title" :author="$post->user->name" :dateCreated="$post->created_at" :content="$post->content"/>
                    @endforeach

                </x-grid>

            </div>

        </div>
    </div>
</x-app-layout>
