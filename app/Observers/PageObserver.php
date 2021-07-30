<?php

namespace App\Observers;

use App\Models\Page;
use Illuminate\Support\Facades\Auth;

class PageObserver
{
    public function creating(Page $page)
    {
        $page->created_by = Auth::id();
    }

    public function saving(Page $page)
    {
        $page->description = clean($page->description);
    }
}
