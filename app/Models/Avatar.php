<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Avatar extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'chain_id',
        'avatar_id',
        'name',
    ];
}
