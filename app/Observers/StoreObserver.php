<?php

namespace App\Observers;

use App\Models\Store;
use Illuminate\Support\Facades\Auth;

class StoreObserver
{
    public function creating(Store $store)
    {
        $store->created_by = Auth::id();
    }
}
