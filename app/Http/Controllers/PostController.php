<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //
    public function list(){
        $posts = Post::orderByDesc('created_at')
            ->with('user') // check Post model for this rship
            ->get();
        return view('list', ['posts' => $posts]);
    }
    public function create(){
        $users = User::all();
        return view('create', [
            'users' => $users
        ]);
    }
    public function store(){
        $data = request()->validate([
            'user_id' => ['integer', Rule::exists('users', 'id')], // check user_id exists in request, and check that the id column exists in the users table.
            'content' => ['string']
        ]);
        Post::create($data);
        // after creating the post, redirect to home
        return redirect('/');
    }
    public function update(Post $post){
        $data = request()->validate([
            'content' => ['string']
        ]);
        $post->update($data);
        return redirect('/');
    }
//    public function edit($postId){ // get post id from url
//        $post = Post::find($postId);
//        return view('edit', [
//            'post' => $post
//        ]);
//    }
    public function edit(Post $post){ // laravel smart enough to do it for us once we give it a type
        return view('edit', [
            'post' => $post
        ]);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }
}
