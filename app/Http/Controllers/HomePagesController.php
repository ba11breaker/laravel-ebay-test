<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use Illuminate\Support\Facades\DB;
use Auth;

class HomePagesController extends Controller
{
    //
    public function home()
    {   
        $goods = DB::table('goods')->orderBy('favourites', 'desc')->get();
        return view("static_pages.home", compact('goods'));
    }
}
