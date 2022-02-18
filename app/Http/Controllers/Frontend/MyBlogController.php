<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyBlogController extends Controller
{
    public function blog()
    {
        return view('Frontend.Pages.blog');
    }
}
