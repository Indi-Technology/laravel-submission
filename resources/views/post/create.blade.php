<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new post') }}
        </h2>
    </x-slot:header>

    <div class="mx-auto max-w-md mt-12">

        <form class="bg-slate-200 m-4 p-4" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium ">Title</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Title" value="{{ old('title') }}">
                <div class="my-2 ">
                    @error('title')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium ">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Post Description...">{{ old('description') }}</textarea>
                <div class="my-2 ">
                    @error('description')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="img" class="block mb-2 text-sm font-medium ">Upload Image</label>
                <input
                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="img" type="file" name="img">

                <div class="my-2 ">
                    @error('img')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="tags" class="block mb-2 text-sm font-medium ">Tags</label>
                <input type="text" id="tags" name="tags"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tags" value="{{ old('tags') }}">
                <span class="text-xs text-gray-400">Separated by crash (#)</span>

                <div class="my-2 ">
                    @error('tags')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="category_id" class="block mb-2 text-sm font-medium ">Category</label>
                <select id="category_id" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected="">Choose a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == old('category')) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>


                <div class="my-2 ">
                    @error('category_id')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
            </button>
        </form>

    </div>
</x-app-layout>
