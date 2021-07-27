<?php

namespace App\Models;

use App\Concerns\BelongToUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes, BelongToUser;

    protected $table = 'menus';

    protected $fillable = [
        'name',
        'key',
        'menu',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'store_id' => 'integer',
        'menu' => 'array',
        'created_by' => 'integer',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
}
