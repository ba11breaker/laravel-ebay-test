<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biddings;
use App\Models\Goods;
use Illuminate\Support\Facades\DB;
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

    public function home()
    {
        $answers = [];
        return view('biddings.search', compact('answers'));
    }

    public function getBiddings(Request $request)
    {   
        $this->validate($request, [
            'searchKey' => 'required'
        ]);
        $key = $request['searchKey'];
        $minPrice = $request['minPrice'];
        $maxPrice = $request['maxPrice'];
        $answers = [];
        if($minPrice && $maxPrice){
            $answers = DB::table('biddings')
            ->join('users', 'biddings.bidder_id', '=', 'users.id')
            ->join('goods', 'biddings.good_id', '=', 'goods.id')
            ->select('biddings.*', 'users.email', 'goods.description', 'goods.name')
            ->whereRaw('(goods.name like \'%'.$key.'%\' or goods.description like \'%'.$key.'%\') and biddings.offer_price >= '.$minPrice.
                        ' and biddings.offer_price <= '.$maxPrice)
            ->get();
        }else if($minPrice){
            $answers = DB::table('biddings')
            ->join('users', 'biddings.bidder_id', '=', 'users.id')
            ->join('goods', 'biddings.good_id', '=', 'goods.id')
            ->select('biddings.*', 'users.email', 'goods.description', 'goods.name')
            ->whereRaw('(goods.name like \'%'.$key.'%\' or goods.description like \'%'.$key.'%\') and biddings.offer_price >= '.$minPrice)
            ->get();
        }else if($maxPrice){
            $answers = DB::table('biddings')
            ->join('users', 'biddings.bidder_id', '=', 'users.id')
            ->join('goods', 'biddings.good_id', '=', 'goods.id')
            ->select('biddings.*', 'users.email', 'goods.description', 'goods.name')
            ->whereRaw('(goods.name like \'%'.$key.'%\' or goods.description like \'%'.$key.'%\') and biddings.offer_price <= '.$maxPrice)
            ->get();
        }else{
            $answers = DB::table('biddings')
            ->join('users', 'biddings.bidder_id', '=', 'users.id')
            ->join('goods', 'biddings.good_id', '=', 'goods.id')
            ->select('biddings.*', 'users.email', 'goods.description', 'goods.name')
            ->whereRaw('(goods.name like \'%'.$key.'%\' or goods.description like \'%'.$key.'%\')')
            ->get();
        }
        return  view('biddings.search', compact('answers'));
        //return $answers;
    }
}
