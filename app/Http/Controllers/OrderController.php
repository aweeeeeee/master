<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Order()
    {
        return view('backend.pages.order.video-order-action');
    }
}
