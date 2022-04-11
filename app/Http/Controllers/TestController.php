<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $name = 'ahmed';
        $articles = ['laravel', 'php', 'js'];

        return view('test',[
            'name' => $name,
            'articles' => $articles,
        ]);
    }
}
