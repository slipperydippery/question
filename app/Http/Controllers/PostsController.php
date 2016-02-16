<?php

namespace App\Http\Controllers;

use Gate;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function show($id)
    {
    	$post = Post::findOrFail($id);

        if(Gate::denies('show-post', $post)){
            abort(403, 'Sorry, denied');
        }

    	return $post->title;
    }
}
