<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class PostController extends Controller
{
    public function create()
    {
        return view('post-create');
    }

    public function edit(Post $post)
    {
        return view('post-edit', ['post' => $post]);
    }

    public function mostrar()
    {
        $posts = Post::paginate(2);
        return view('mostrar-post', ['posts' => $posts]);
    }
}
