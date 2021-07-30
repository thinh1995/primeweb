<?php

namespace App\Models;

use App\Concerns\BelongToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes, BelongToUser;

    protected $table = 'pages';

    protected $fillable = [
        'name',
        'slug',
        'url',
        'description',
        'is_active',
        'position',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'store_id' => 'integer',
        'is_active' => 'integer',
        'created_by' => 'integer',
    ];
}
