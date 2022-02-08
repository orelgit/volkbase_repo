<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use
        HasFactory;

    // العلاقة بين جدول المستخدمين و نوع المستخدم
    public function users_type()
    {
        return $this->belongsTo(User_type::class);
    }
    // لتشفير كلمة السر
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
