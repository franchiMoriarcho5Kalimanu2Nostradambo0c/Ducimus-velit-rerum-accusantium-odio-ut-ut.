@props(['padding' => 'p-6', 'reverse' => false, 'ei' => false, 'span' => false, 'flex' => false])
@if(!$span)
    <div
        style="font-family: sans-serif; font-size: 20px;"
        class="ml-3 mt-3 mr-3 mb-3 {{ $padding }} border border-black rounded-xl
            {{ $reverse
                ?
                $ei
                    ?
                'bg-gray-800 text-white hover:bg-gray-100 hover:text-black'
                    :
                'bg-gray-600 text-white hover:bg-gray-200 hover:text-black'
                :
            'bg-gray-200 hover:bg-gray-600 text-black hover:text-white' }}"
    >
        {{ $slot }}
    </div>
@else
    <span
        style="font-family: sans-serif; font-size: 20px;"
        class="ml-3 mt-3 mr-3 mb-3 {{ $padding }} border border-black rounded-xl
            {{ $reverse
                ?
                $ei
                    ?
                'bg-gray-800 text-white hover:bg-gray-100 hover:text-black'
                    :
                'bg-gray-600 text-white hover:bg-gray-200 hover:text-black'
                :
            'bg-gray-200 hover:bg-gray-600 text-black hover:text-white' }}"
    >
        {{ $slot }}
    </span>
@endif