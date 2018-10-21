<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Firm;

class SearchController extends Controller
{
    public function firm(Request $request)
    {
        $data = $request->all();

        $searchString = '%' . $data['search_firm'] . '%';
        $items = Firm::where('name', 'LIKE', $searchString)->get();
        $view = view('firm', ['items' => $items])->render();
        return (new Response($view));

    }
}
