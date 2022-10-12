<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'prevent-back-history']);
    }

    public function index(User $user)
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(30);

        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
