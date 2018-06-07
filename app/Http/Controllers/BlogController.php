<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Posts::orderBy('id', 'desc')->paginate(10);
        return view('frontend.index', ['posts' => $posts]);
    }

    public function show($id, $slug){
        $post = Posts::find($id);
        return view('frontend.show', ['post' => $post]);
    }
}
