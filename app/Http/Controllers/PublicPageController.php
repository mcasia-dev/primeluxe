<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Homepage;
use App\Models\Material;
use App\Models\Product;
use App\Models\Solution;

class PublicPageController extends Controller
{
    public function index()
    {
        $homepage = Homepage::with(['media'])->isPublished()->latest('id')->first();

        return view('home', compact('homepage'));
    }

    public function solutions()
    {
        $solution = Solution::with(['media'])->isPublished()->latest('id')->first();

        return view('solutions', compact('solution'));
    }

    public function systems()
    {
        return view('systems');
    }

    public function materials()
    {
        $material = Material::with(['media'])->isPublished()->latest('id')->first();

        return view('materials', compact('material'));
    }

    public function products()
    {
        $product = Product::with(['media'])->isPublished()->latest('id')->first();

        return view('products', compact('product'));
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
        $about = AboutUs::with(['media'])->isPublished()->latest('id')->first();

        return view('about', compact('about'));
    }

    public function contact()
    {
        $contact = Contact::with(['media'])->isPublished()->latest('id')->first();

        return view('contact', compact('contact'));
    }
}
