<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class UserGroup extends Model
{
    protected $fillable = [
        'users_id',
        'groups_id',
    ];
}
