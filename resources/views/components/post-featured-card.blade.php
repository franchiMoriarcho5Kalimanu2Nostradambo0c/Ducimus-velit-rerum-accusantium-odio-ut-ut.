@props(['post'])

<article class="bg-gray-100 text-black hover:bg-gray-800 hover:text-white">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <!-- TODO -->
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2 text-center flex">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4 max-w-sm mx-auto text-xs text-center">
                    <x-panel :padding="'p-2'">
                        <h1 class="text-3xl">
                            <a href="/posts/{{ $post->slug }}" style="font-family: Lucida Handwriting; text-shadow: 1px 1px;">
                                {{ $post->title }}
                            </a>
                        </h1>
                    </x-panel>

                    <span class="mt-2 block text-xs" style="font-family: Courier New;">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p style="font-family: Monaco; font-size: 25px;">
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <x-panel :padding="'p-1'">
                    <div class="flex items-center text-sm">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-1">
                            <a href="/?author={{ $post->author->userName }}" class="text-sm">
                                <h5 class="font-bold" style="font-family: Brush Script MT;">{{ $post->author->name }}</h5>
                            </a>
                        </div>
                    </div>
                </x-panel>

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}"
                        class="flex transition-colors duration-300 text-sm font-semibold py-2 px-8"
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