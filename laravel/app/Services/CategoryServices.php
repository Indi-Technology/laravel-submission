<?php

namespace App\Services;

use App\Models\Category;


class CategoryServices
{
    public function handleStore($request)
    {
        $data = $request->validated();

        Category::create($data);
    }

    public function handleUpdate($request, $category)
    {
        $data = $request->validated();
        $category->update($data);
    }

    public function handleDestroy($category)
    {

        $category->delete();
    }
}
