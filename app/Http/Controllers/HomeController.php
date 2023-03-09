<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($country)
    {
        return view('search');
    }

    public function offers(Request $request)
    {
        return view('offers');
    }

    public function offer(Request $request, $offer)
    {
        return view('offer');
    }
}
