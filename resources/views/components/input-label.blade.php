@props(['name' => ''])
<label
    class="block mb-2 uppercase font-bold text-xs"
    style="font-size: 15px; font-weight: 600; font-family: Lucida Handwriting, monospace;"
    for="{{ $name }}"
>{{ $slot }}</label>