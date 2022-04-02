@props(['category'])
<x-panel :padding="'p-1'" reverse="true">
    <a href="/?category={{ $category->slug }}" style="font-family: Lucida Console; text-shadow: 2px 2px darkred;">{{ $category->name }}</a>
</x-panel>