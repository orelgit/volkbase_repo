<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Blog extends Authenticatable

{
    protected $with = ['category'];
    protected $table = 'blogs';
    protected $primaryKey = 'b_id';
    protected $foreignKey = 'c_id';
    protected $fillable = [
        'b_id',
        'b_blog',
        'b_title',
        'u_id',
        'c_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'c_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('c_id', $category)
            )
        );
    }
    use HasFactory;
}
