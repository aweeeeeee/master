<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Home()
    {
        return view('backend.pages.home');
    }
    public function Manual()
    {
        return view('backend.pages.manual.video-order-action');
    }
}
