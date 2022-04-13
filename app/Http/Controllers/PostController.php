<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;

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
        $users = User::all();

        //query to get all users
        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function store(StorePostRequest $request)
    {
        //validate the data
        // request()->validate([
        //     'title' => ['required', 'min:3'],
        //     'description' => ['required', 'min:5'],
        // ],[
        //     'title.required' => 'my message',
        //     'title.min' => 'override default min message',
        // ]);

        //get me the request data
        // $data = $_REQUEST; don't use plain php in laravel framework
        $data = request()->all();
        // $title = request()->title;

        //store the request data in the db
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
            'some_column' => 'some value',
            'x' => 'asd',
            'y' => 'askdhjashd',
        ]);

        //redirect to /posts
        return to_route('posts.index');
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
