<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Blog;
use App\Gallery;
use App\Faq;
use App\Http\Controllers\Controller;
use App\Product;
use App\Service;
use App\Slider;
use App\Contact;
use App\Social;
use App\Sponsor;
use App\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social=Social::all();
        $slider=Slider::all();
        $service = Service::all();
        $product= Product::all();
        return view('frontend.index')
            ->with('social',$social)
            ->with('services',$service)
            ->with('product',$product)
            ->with('slider',$slider);
    }
}
