<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryServices;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return view('categories.index', [
            'categories'    => $categories
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request, CategoryServices $categoryServices)
    {
        $categoryServices->handleStore($request);
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {

        return view('categories.edit', [
            'category'  => $category
        ]);
    }

    public function update(CategoryRequest $request, Category $category, CategoryServices $categoryServices)
    {

        $categoryServices->handleUpdate($request, $category);

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category, CategoryServices $categoryServices)
    {

        $categoryServices->handleDestroy($category);

        return redirect()->route('categories.index');
    }
}
