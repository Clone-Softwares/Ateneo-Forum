
<div class="w-full flex justify-center">
    <div class=" flex items-center max-w-2xl w-1/2 py-5 bg-white rounded-md min-h-lg border border-black" >
        <form action="{{ route('post.store') }}" class="flex flex-col px-3 py-1 w-full p-10" method="POST" >
           @csrf

            @if ($errors->any())
               <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
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

