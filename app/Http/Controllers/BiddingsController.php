<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biddings;
use App\Models\Goods;
use Auth;

class BiddingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'offer_price' => 'required|numeric'
        ]);
        Auth::user()->biddings()->create([
            'offer_price' => (float)$request['offer_price'],
            'good_id' => $request['good_id']
        ]);
        return redirect()->back();
    }
}
