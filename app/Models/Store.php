<?php

namespace App\Models;

use App\Concerns\BelongToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes, BelongToUser;

    protected $table = 'stores';

    protected $fillable = [
        'template_id',
        'name',
        'domain',
        'alias',
        'description',
        'option_page',
        'homepage',
        'is_active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'template_id' => 'integer',
        'is_active' => 'integer',
        'created_by' => 'integer',
    ];
}
