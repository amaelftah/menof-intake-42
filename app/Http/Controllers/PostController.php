<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //we need a model class that retrieves data from posts table
        $posts = Post::all();

        // $posts = [
        //     ['id' => 1, 'title' => 'first post', 'posted_by' => 'ahmed', 'created_at' => '2022-04-11'],
        //     ['id' => 2, 'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-04-11'],
        // ];
        // dd($posts); //stop execution and dump the variable
        return view('posts.index',[
            'allPosts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //some logic to store data in db
        //redirect to /posts
        return 'we are in store';
    }

    public function show($post)
    {
        //select * from posts where id = 1
        $dbPost = Post::find($post); //App\Models\Post
        $dbPost2 = Post::where('id', 1)->first();

        dd($dbPost2);
        // dd($post);
        return view('posts.show');
    }
}
