<x-app-layout>
<!-- Place this at the end of your Blade view -->
@if (session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
@endif

<form method="post" class="max-w-md mx-auto p-8 bg-white rounded shadow-lg" action="{{ route('store.company') }}" enctype="multipart/form-data">
    @csrf
    <h1 class="text-center text-xl font-bold mb-8">Create Your Own Company</h1>

    <div class="flex items-center justify-center w-full mb-8">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
            <div class="mb-4">
                <svg class="w-12 h-12 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                </svg>
            </div>
            <p class="mb-2 text-sm text-gray-500">Click to upload or drag and drop</p>
            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            <input id="dropzone-file" name="logo" type="file" class="hidden" />
        </label>
    </div>

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Company Name</label>
        <input type="text" name="name" id="name" class="block w-full mt-1 text-sm border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="slogan" class="block text-sm font-medium text-gray-700">Slogan</label>
        <input type="text" name="slogan" id="slogan" class="block w-full mt-1 text-sm border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
        <input type="text" name="industry" id="industry" class="block w-full mt-1 text-sm border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" id="description" rows="4" class="block w-full mt-1 text-sm border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"></textarea>
    </div>

    <button type="submit" class="w-full py-2 text-sm font-semibold text-white bg-blue-700 rounded hover:bg-blue-500">Submit</button>
</form>


</x-app-layout>
