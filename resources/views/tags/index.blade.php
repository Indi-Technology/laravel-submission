<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot:header>

    <div class="m-2 p-2 flex justify-end">
        <a href="{{ route('tags.create') }}" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded">Add New
            Tags</a>
    </div>

    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No.
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Tag Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $tag->name }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex space-x-2">
                                <a href="{{ route('tags.edit', $tag->id) }}"
                                    class="focus:outline-none text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-900">Edit
                                </a>
                                <form method="POST" action="{{ route('tags.destroy', $tag->id) }}"
                                    onsubmit="return confirm('Are you sure want to delete this data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $tags->links() }}
    </div>



</x-app-layout>
