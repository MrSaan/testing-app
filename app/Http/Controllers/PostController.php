<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view( 'posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString()
        ]);
    }

    // category filter newbie
    // public function category( Category $category)
    // {
    //     return view( 'posts', [
    //         'posts' => $category->posts,
    //         'currentCategory' => $category,
    //         'categories' => Category::all()
    //     ]);
    // }

    public function viewPost( Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

}