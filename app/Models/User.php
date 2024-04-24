<?php

namespace App\Models;

use App\Traits\ObservantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use ObservantTrait, HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'del_flg',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
