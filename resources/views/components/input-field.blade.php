@props(['type' => 'text', 'name' => '', 'value' => '', 'required' => true])
@if($required)
    <input
        class="border border-gray-400 p-2 w-full text-black"
        style="font-size: 20px; font-weight: 500; font-family: Helvetica, monospace;"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value }}"
        required
    >
@else
    <input
        class="border border-gray-400 p-2 w-full text-black"
        style="font-size: 20px; font-weight: 500; font-family: Helvetica, monospace;"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value }}"
    >
@endif