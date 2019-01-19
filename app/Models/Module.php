<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name',
        'control_class',
        'db_name',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
