<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show($postId)
    {
        return Post::find($postId);
    }

    public function store(StorePostRequest $request)
    {
        // if(request()->header('Accept') && request()->header('Accept') == 'application/pdf') {
        //     return ' some pdf';
        // }

        $data = $request->all();

        //store the request data in the db
        $post = Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]);

        return $post;
    }
}
