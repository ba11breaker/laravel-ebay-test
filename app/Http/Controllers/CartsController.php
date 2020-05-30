<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use Auth;

class CartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        Auth::user()->carts()->create([
            'good_id' => $request['good_id']
        ]);
        session()->flash('success', 'Add Successfully');
        return redirect()->back();
    }

    public function destroy(Carts $cart)
    {
        //$this->authorize('destroy', $cart);
        $cart->delete();
        session()->flash('success', 'Remove Successfully');
        return redirect()->back();
    }
}
