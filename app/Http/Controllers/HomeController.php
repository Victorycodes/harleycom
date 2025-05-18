<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function about_page()
    {
        return view('about');
    }

    function contact_page()
    {
        return view('contact');
    }

    function portfolio_page()
    {
        return view('portfolio');
    }

    function faq_page()
    {
        return view('faq');
    }

    function blog_page()
    {
        return view('blog');
    }

    function affiliates_page()
    {
        return view('affiliates');
    }

        function projects_page()
    {
        return view('projects');
    }
}
