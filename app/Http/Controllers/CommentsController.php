<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) {
        // Form Validation

        $this->validate(request(), [
            'body' => 'required | min : 10',
        ]);

        // create a new post using the request data

        $comment = new Comment;
        $comment->post_id = $post->id;
        $comment->body = request('body');

        // save to the database

        $comment->save();

        // redirect it to some page 

        return back();
    }
}
