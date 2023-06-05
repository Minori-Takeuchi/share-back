<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->BelongsTo(Category::class,'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }
}
