<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-sm mx-auto mt-10 border border-gray-200 rounded-lg p-6">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">title</label>
                    <input class="border border-gray-400 p-2 w-full" value="{{ old('title') }}" name="title"
                        type="text" id="title" required>

                    @error('title')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">thumbnail</label>
                    <input class="border border-gray-400 p-2 w-full" value="{{ old('thumbnail') }}" name="thumbnail"
                        type="file" id="thumbnail" required>

                    @error('thumbnail')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">slug</label>
                    <input class="border border-gray-400 p-2 w-full" value="{{ old('slug') }}" name="slug"
                        type="text" id="slug" required>

                    @error('slug')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">excerpt</label>
                    <textarea class="border border-gray-400 p-2 w-full" name="excerpt" type="text" id="excerpt" required>{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">body</label>
                    <textarea class="border border-gray-400 p-2 w-full" name="body" type="text" id="body" required>{{ old('body') }}</textarea>

                    @error('body')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">category</label>
                    <select name="category_id" id="category">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach

                    </select>

                    @error('category')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type='submit'
                        class="bg-blue-500 text-white uppercase rounded-xl py-2 px-4 hover:bg-blue-400 ">
                        Publish
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
