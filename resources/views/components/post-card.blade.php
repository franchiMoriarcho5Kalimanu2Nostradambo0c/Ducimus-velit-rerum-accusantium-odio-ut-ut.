@props(['post'])
<article
    {{ $attributes->merge(['class',
        'transition-colors duration-300 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}
>
    <div class="py-6 px-5">
        <div>
            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2 text-center flex">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4 max-w-sm mx-auto text-xs text-center">
                    <x-panel :padding="'p-2'">
                        <h1 class="text-3xl text-center">
                            <a href="/posts/{{ $post->slug }}" style="font-family: Times New Roman, Times, serif; text-shadow: 1px 1px;">
                                {{ $post->title }}
                            </a>
                        </h1>
                    </x-panel>

                    <span class="mt-2 block text-xs" style="font-family: Courier New;">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p style="font-size: 20px; font-family: Brush Script MT, cursive;">
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <x-panel :padding="'p-1'">
                    <div class="flex items-center">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-1 text-center">
                            <a href="/?author={{ $post->author->userName }}" class="text-sm">
                                <h5 class="font-bold" style="font-family: Brush Script MT;">{{ $post->author->name }}</h5>
                            </a>
                        </div>
                    </div>
                </x-panel>

                <div class="ml-3 text-center">
                    <a href="/posts/{{ $post->slug }}"
                        class="flex transition-colors duration-300 font-semibold py-2 px-8 text-sm"
                    >
                        <x-panel :padding="'p-1'">
                            <span>Read More</span>
                        </x-panel>
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>