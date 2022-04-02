@props(['trigger'])
<div x-data="{ show: false }" @click.away="show = false">
    <!-- trigger -->
    <div @click="show = !show" class="bg-gray-300 hover:bg-gray-100 text-black rounded-xl">
        {{ $trigger }}
    </div>
    <!-- dropdownLinks -->
    <div x-show="show" class="py-2 absolute bg-gray-100 mt-1 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none;">
        {{ $slot }}
    </div>
</div>