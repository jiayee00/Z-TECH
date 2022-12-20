<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {

    }

    public function create()
    {
        return view('auth.posts.create');
    }
}
