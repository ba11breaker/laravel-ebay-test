<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePagesController extends Controller
{
    //
    public function home()
    {
        return view("static_pages.home");
    }
}
