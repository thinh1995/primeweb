<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryObserver
{
    public function creating(Category $category)
    {
        $category->created_by = Auth::id();
    }

    public function saving(Category $category)
    {
        $category->description = clean($category->description);
    }
}
