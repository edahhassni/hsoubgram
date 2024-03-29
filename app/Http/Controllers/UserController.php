<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(User $user, Post $post)
  {
    $posts = Post::all();
    return view('users.profile', compact(['user','posts']));
  }
}
