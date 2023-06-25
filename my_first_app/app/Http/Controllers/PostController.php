<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{   
    public function deletePost(Post $post ) {
        if (auth()->user()->id === $post['user_id'] ) {
            $post->delete();
        }
        return redirect('/');
    }

    public function updatePost(Post $post, Request $request) {
        //check if user is the author
        if (auth()->user()->id !== $post['user_id'] ) {
            return redirect('/');
        }
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');
    }

    public function showEditScreen(Post $post){
        if (auth()->user()->id !== $post['user_id'] ) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }   

    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        //strip tags to make sure no code is stored. prevents sql injection
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);

        return redirect('/');

    }
}
