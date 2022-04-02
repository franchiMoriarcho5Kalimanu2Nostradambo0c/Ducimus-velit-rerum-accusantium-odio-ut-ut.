@props(['posts'])

<x-post-featured-card :post="$posts[0]" />
@if($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'col-span-3  bg-gray-100 text-black hover:bg-gray-900 hover:text-white' :
                    'col-span-2 bg-gray-100 text-black hover:bg-gray-800 hover:text-white' }}"
            />
        @endforeach
    </div>
@endif