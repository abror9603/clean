<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function project()
    {
        return view('project');
    }

    public function latest_blog()
    {
        return view('latest_blog');
    }

    public function blog_detail()
    {
        return view('blog_detail');
    }

    public function contact()
    {
        return view('contact');
    }
}