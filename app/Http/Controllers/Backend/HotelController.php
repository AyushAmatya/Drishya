<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
    $page_name = "Hotel";
       return view('backend.hotel',compact('page_name'));
    }
}
