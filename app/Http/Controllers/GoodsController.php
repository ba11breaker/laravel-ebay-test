<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use Auth;

class GoodsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:40|min:4',
            'description' => 'required|max:240'
        ]);

        Auth::user()->goods()->create([
            'name' => $request['name'],
            'description' => $request['description'],
            'favourites' => 0,
            'picurl' => ""
        ]);
        session()->flash('success', 'Publish Successfully');
        return redirect()->back();
    }

    public function update(Goods $good, Request $request)
    {
        $data = [];
        if($request->update === 'favourite') {
            $data['favourites'] = $good['favourites']+1;
        }
        $good->update($data);
        return redirect()->back();
    }

    public function show(Goods $good)
    {
        $comments = $good->comments()
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
        $biddings = $good->biddings()
                            ->orderBy('offer_price', 'desc')
                            ->paginate(10);
        return view('goods.show', compact('good', 'comments', 'biddings'));
    }
}
