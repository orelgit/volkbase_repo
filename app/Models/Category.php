<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $table = 'categories';
    protected $primaryKey = 'c_id';
    protected $fillable = [
        'c_id',
        'c_name',
        'c_note',
    ];
    public function blog()
    {
        return $this->hasMany(Blog::class, 'c_id');
    }
    use HasFactory;
}
