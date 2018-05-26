<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $posts = Post::latest()->get();
        return view('posts.index')->with('posts', $posts);
    }

    public function show(Post $post) {
        return view('posts.show')->with('post', $post);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        // Form Validation

        $this->validate(request(), [
            'title' => 'required | min : 3',
            'body' => 'required',
        ]);

        // create a new post using the request data

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->id();

        // save to the database

        $post->save();

        // redirect it to some page 

        return redirect('/');
    }
}
