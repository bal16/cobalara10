<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    // public function index()
    // {
        // return view('categories', [
        //     'title'=>'Post Categories',
        //     'active'=>'categories',
        //     'categories'=>User::all()
        // ]);
        // return ;

    // }

    public function show(User $author){
        return view('posts', [
            'title'=>"Post by Author : $author->name",
            'active'=>'posts',
            'posts'=>$author->posts->load('category', 'author')
        ]);
    }
}
