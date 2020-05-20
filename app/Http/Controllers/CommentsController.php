<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Goods;
use Auth;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);
        Auth::user()->comments()->create([
            'content' => $request['content'],
            'good_id' => $request['good_id']
        ]);
        return redirect()->back();
    }
}
