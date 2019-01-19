<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
