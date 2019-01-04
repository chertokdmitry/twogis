<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Firm;

class FirmController extends Controller
{
    public function all()
    {

        $key = 'firmsAll';
        $firms = Cache::remember($key, 60, function () {

            return  Firm::all();
        });

        return response()->json($firms);
    }

    public function view($id)
    {
        $firm = Firm::where('id', $id)->get();

        return response()->json($firm);
    }
}
