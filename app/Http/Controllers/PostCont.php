<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCont extends Controller
{
    public function sposts(Request $r) {
        $post = $r->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $post['title'] = strip_tags($post['title']);
        $post['content'] = strip_tags($post['content']);
        $post['user'] = auth()->id();
        Post::create($post);
        return redirect('/');
    }
    public function edit(Post $post) {
        
    }
}
