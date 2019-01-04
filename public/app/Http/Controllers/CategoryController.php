<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Category;

class CategoryController extends Controller
{
    public function all()
    {
        $key = 'categoriesAll';
        $categories = Cache::remember($key, 60, function () {

            return Category::all();
        });

        return json_encode($categories, JSON_UNESCAPED_UNICODE);
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
