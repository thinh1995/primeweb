<?php

namespace App\Models;

use App\Concerns\BelongToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, BelongToUser;

    protected $table = 'categories';

    protected $fillable = [
        'type',
        'name',
        'slug',
        'description',
        'is_active',
        'parent_id',
        'meta_title',
        'meta_keyword',
        'meta_description',
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
