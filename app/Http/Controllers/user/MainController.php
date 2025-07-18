<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }

    public function about()
    {
        return view('front.pages.about');
    }
    public function service()
    {
        return view('front.pages.service');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
}
