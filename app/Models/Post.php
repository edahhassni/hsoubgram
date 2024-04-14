<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['image' , 'slug' , 'description', ];



    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


<<<<<<< HEAD
    public function likes()
    {
        return $this->belongsToMany(User::class,'likes');
    }

    public function liked(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }
=======

>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044

}
