<x-layout>
    <section class="px-6 py-8">
        <main class='max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-lg p-6'>
            <h1 class="text-center text-lg font-bold">Login!</h1>
            <form method="POST" action="/session">

                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>
                    <input class="border border-gray-400 p-2 w-full" value="{{ old('email') }}" type="email"
                        name="email" id="email" required>

                    @error('email')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                        required>

                    @error('password')
                        <p class='text-red-500 text-xs'> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type='submit' class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 w-full">
                        Submit
                    </button>
                </div>


            </form>
        </main>
    </section>
</x-layout>
