<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_type extends Authenticatable
{
    protected $table = 'user_types';
    protected $primaryKey = 'ut_id';
    protected $fillable = [
        'ut_id',
        'ut_name',
        'ut_note',
    ];
    use HasFactory;
}
