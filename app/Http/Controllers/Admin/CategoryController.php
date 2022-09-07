<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Post;
use App\Services\CategoryServices;

use CategoryServices as GlobalCategoryServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::get();
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create(Category $categories)
    {
        return view('admin.categories.create', [
            'categories' => $categories,
        ]);
    }

    public function show()
    {
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('admin-category.index')->with('success-create', 'Successfuly Created New Data');
    }

    public function edit(Category $categories)
    {
        return view('admin.categories.edit', [
            'categories' => $categories
        ]);
    }

    public function update(CategoryRequest $request, Category $categories)
    {
        $data = $request->validated();

        $categories->update($data);

        return redirect()->route('admin-category.index')->with('success-update', 'Successfuly Updated New Data !');
    }

    public function destroy(Category $categories)
    {
        $categories->delete();

        return redirect()->route('admin-category.index')->with('success-delete', 'Data Successfuly Deleted !');
    }
}
