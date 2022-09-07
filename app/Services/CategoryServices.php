<?php


namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryServices
{
   public function handleDestroy($categories)
   {
      Storage::delete($categories->name);
      $categories->delete();
   }
}
