<?php

namespace App\Observers;

use App\Models\UITemplate;
use Illuminate\Support\Facades\Auth;

class UITemplateObserver
{
    public function creating(UITemplate $UITemplate)
    {
        $UITemplate->created_by = Auth::id();
    }
}
