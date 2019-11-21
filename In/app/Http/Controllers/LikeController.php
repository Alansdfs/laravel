<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(\App\Post $post){
        return auth()->user()->likes()->toggle($post->id);
    }
}
