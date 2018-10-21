<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Category;

class CategoryController extends Controller
{
    public function all()
    {
        $item = Category::all();
        $view = view('category', ['items' => $item])->render();
        return (new Response($view));
    }

    public function view($id)
    {
        $item = Category::where('id', $id)->get();
        $view = view('category', ['items' => $item])->render();
        return (new Response($view));
    }
}
