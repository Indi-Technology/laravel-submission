<div class="flex justify-between m-2 bg-slate-100 p-2">
    <div>
        <h2 class="text-3xl font-semibold">{{ $ctg->name }}</h2>
        <p>{{ $ctg->id }}</p>
    </div>
    <div class="flex space-x-2 m-2 p-2">
        <a href="{{ route('categories.edit', $ctg->id) }}" class="text-orange-400 hover:text-orange-600">Edit</a>
        <form action="{{ route('categories.destroy', $ctg->id) }}" method="post"
            onsubmit="return confirm('Are you sure want to delete this data?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-400 hover:text-red-600">Delete</button>
        </form>
    </div>
</div>
