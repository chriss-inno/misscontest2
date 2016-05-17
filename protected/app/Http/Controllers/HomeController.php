<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('site.home');
    }
    public function about()
    {
        return view('site.home');
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function portfolio()
    {
        return view('site.home');
    }



}
