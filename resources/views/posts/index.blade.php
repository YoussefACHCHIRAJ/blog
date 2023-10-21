<x-layout>

    @include('posts._header')


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-featured :post="$posts[0]" />

            @if ($posts->count() > 1)
                <x-post-grid :posts="$posts" />
            @endif
        @else
            <p class="text-center">No Posts yet. Pleaze chech later</p>
        @endif
        {{ $posts->links() }}
    </main>

</x-layout>
