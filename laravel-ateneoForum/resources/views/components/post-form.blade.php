
<div class="w-full flex justify-center">
    <div class=" flex items-center max-w-2xl w-1/2 py-5 bg-white rounded-md min-h-lg border border-black" >
        <form action="{{ route('post.store') }}" class="flex flex-col px-3 py-1 w-full p-10" method="POST" >
           @csrf
            <label for="title"">Title</label>
               <x-text-input placeholderContent="Title here" name="title"/>

            <label for="title" >Content</label>
               <x-text-input placeholderContent="Content here"  class="pb-20 border rounded px-3" name="content" />
        <x-button type="submit">
            Submit
        </x-button>


        </form>
    </div>
</div>

