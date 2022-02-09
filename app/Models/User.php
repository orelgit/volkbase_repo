<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'u_id',
        'u_name',
        'u_mobile',
        'u_pass',
        'u_email',
        'u_photo',
        'ut_id'
    ];
    use
        HasFactory;
    // العلاقة بين جدول المستخدمين و نوع المستخدم
    // public function users_type()
    // {
    //     return $this->belongsTo(User_type::class);
    // }
    // لتشفير كلمة السر
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
