<?php

namespace App\Observers;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class MenuObserver
{
    public function creating(Menu $menu)
    {
        $menu->created_by = Auth::id();
    }
}
