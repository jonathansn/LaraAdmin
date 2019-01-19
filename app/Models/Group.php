<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
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