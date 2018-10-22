<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Firm;

class FirmController extends Controller
{
    public function all()
    {
        $firms = Firm::all();
        return response()->json($firms);
    }

    public function view($id)
    {
        $firm = Firm::where('id', $id)->get();
        return response()->json($firm);
    }
}
