<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function list(){
        $posts = Post::orderByDesc('created_at')->get();
        return view('list', ['posts' => $posts]);
    }
    public function create(){

    }
    public function store(){

    }
    public function update(){

    }
    public function edit(){

    }
    public function destroy(){

    }
}
