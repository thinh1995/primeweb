<?php

namespace App\Models;

use App\Concerns\BelongToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UITemplate extends Model
{
    use SoftDeletes, BelongToUser;

    protected $table = 'ui_templates';

    protected $fillable = [
        'name',
        'directory',
        'is_active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'is_active' => 'integer',
        'created_by' => 'integer',
    ];
}
