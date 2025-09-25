@props(['type' => 'submit'])

<button class="px-3 py-1 bg-blue-600 text-white rounded-md" type="{{ $type }}">

{{ $slot }}
</button>
