<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use Auth;
use App;

class PdfController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;
        $user_name = $request->user_name;
        $favourites = $request->favourites;
        $pdf = App::make('dompdf.wrapper');
        $id_string = '<h3>Good ID: ' . $id . '</h3>';
        $name_string = '<h3>Good Name: ' . $name . '</h3>';
        $description_string = '<div>Description: ' . $description . '</div>';
        $user_name_string = '<h3>Publisher Name: ' . $user_name . '</h3>';
        $favourites_string = '<h3>Favourites: ' . $favourites . '</h3>';
        $pdf->loadHTML(
            $id_string .
            $name_string .
            $description_string .
            $user_name_string .
            $favourites_string
        );
        return $pdf->stream();
    }
}
