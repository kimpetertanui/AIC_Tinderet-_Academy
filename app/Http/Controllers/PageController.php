<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // loading the root of the application i.e the index page
    public function index()
    {
        return view('pages.index');
    }

    //loading the about us page 
    public function about()
    {
        return view('pages.about');
    }

    //loading the contact us page
    public function contact()
    {
        return view('pages.contact');
        
    }

    //loading the sports page
    public function sports()
    {
        return view('pages.sports');
    }
}
