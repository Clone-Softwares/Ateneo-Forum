@props(['disabled' => false, 'placeholderContent' => 'nana', 'name' => 'name']);

<input
placeholder="{{ $placeholderContent }}"
@disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 mb-8 mt-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
