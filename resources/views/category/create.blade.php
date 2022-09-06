<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new category') }}
        </h2>
    </x-slot:header>

    <div class="mx-auto max-w-md mt-12">

        <form class="bg-slate-200 m-4 p-4" method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium ">Category
                    Name</label>
                <input type="text" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Category Name" value="{{ old('name') }}">
                <div class="my-2 ">
                    @error('name')
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
