<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    //
    public function index(){
        $post = Post::all();
        return view('template.frontpage.main', ['post'=>$post]);
    }
}
