<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Firm;

class FirmController extends Controller
{
    public function all()
    {
        $firms = Firm::all();
        $view = view('firm', ['items' => $firms])->render();
        return (new Response($view));
    }

    public function view($id)
    {
        $firm = Firm::where('id', $id)->get();
        $view = view('firm', ['items' => $firm])->render();
        return (new Response($view));
    }
}
