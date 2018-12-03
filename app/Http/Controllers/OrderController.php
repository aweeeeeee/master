<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function UserSystem()
    {
        return view('backend.pages.order.user');
    }
}
