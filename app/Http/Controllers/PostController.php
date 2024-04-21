<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = $title .' by '. $author->name;
        };

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = $title . ' in '. $category->name;
        };


        return view('posts', [
            "title" => 'All Posts' . $title,
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single post",
            "active" => 'posts',
            "post" => $post
            // "post" => Post::find($post)
        ]);
    }
}
