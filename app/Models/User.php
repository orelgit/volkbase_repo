<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'u_id';
    protected $fillable = [
        'u_id',
        'u_name',
        'u_mobile',
        'password',
        'u_email',
        'u_photo',
        'ut_id'
    ];
    use
        HasFactory;

    // لتشفير كلمة السر
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
