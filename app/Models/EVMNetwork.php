<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class EVMNetwork extends Authenticatable
{
    protected $table = 'evm_networks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'chain_id',
        'name',
        'short_name',
        'description',
        'active',
    ];

    public function avatars()
    {
        return $this->hasMany(Avatar::class, 'chain_id', 'chain_id');
    }
}
