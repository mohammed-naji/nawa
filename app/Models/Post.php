<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'content', 'image'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault(['name' => 'Uncategorized']);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
