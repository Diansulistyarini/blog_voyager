<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function index(){
        $post = Post::all();
        return view('template.index', ['post'=>$post]);
    }
}
