@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class='absolute bottom-3 right-3 bg-blue-500 text-sm text-white px-4 py-2 rounded'>
        {{ session('success') }}
    </div>
@endif
