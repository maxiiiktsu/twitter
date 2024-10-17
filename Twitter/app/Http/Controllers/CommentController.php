<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required'
        ]);

        $post = Post::findOrFail($postId);

        $post->comments()->create([
            'content' => $request->input('content')
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

}
