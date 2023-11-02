@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class='border border-gray-200 p-6 rounded-xl'>
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                class="rounded-full">
            <h3 class="ml-3">Want to participate?</h3>
        </header>

        <div class="mt-6">
            <textarea name="body" class=" w-full text-sm focus:outline-none focus:ring"
                placeholder="Quick, Think something to say" rows="5" required></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
            <button type="submit"
                class="bg-blue-500 py-2 px-10 text-white uppercase text-xs font-semibold rounded-2xl hover:bg-blue-600">Post</button>
        </div>
    </form>
@else
    <p class="font-semibold">
        <a href="/register"class="hover:underline">Register</a> or <a href="/login"class="hover:underline">Log in</a> to
        leave a comment.
    </p>
@endauth
