<?php
namespace App\Http\Controllers;

class PublicPageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function solutions()
    {
        return view('solutions');
    }

    public function systems()
    {
        return view('systems');
    }

    public function materials()
    {
        return view('materials');
    }

    public function collections()
    {
        return view('collections');
    }

    public function process()
    {
        return view('process');
    }

    public function about() 
    {
        return view('about');
    }

    public function contact() 
    {
        return view('contact');
    }
}
