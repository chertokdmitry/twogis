<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function all()
    {
        $items = Category::all();
        return json_encode($items, JSON_UNESCAPED_UNICODE);
    }

    public function view($id)
    {
        $item = Category::where('id', $id)->get();
        return json_encode($item, JSON_UNESCAPED_UNICODE);
    }

    public function firmsCategory($id)
    {
        $firms = [];

        $result = Category::find($id);

        foreach ($result->firms as $firm) {
            $firms[] = ['id' => $firm->id, 'name' => $firm->name];
        }

        return json_encode($firms, JSON_UNESCAPED_UNICODE);
    }
}
