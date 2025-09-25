@props(['author' => 'jose', 'title' => 'noli mi tangere', 'content'=>'touch me not', 'dateCreated' => 'n/a'])

<div class="border border-gray-900   px-3 py-5 rounded flex flex-col justify-between ">
    <div>
        <h1 class="text-2xl">
            {{ $title }}
        </h1>
        <p class="text-sm">
                {{ $author }}
        </p>
         <p class="text-sm mb-10">
                {{ $dateCreated }}
        </p>
        <p>
        {{ $content }}
        </p>
    </div>

    <x-post-interaction/>
</div>
