<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Firm;
use App\Category;

class SearchController extends Controller
{
    public $categories;
    public $firms;

    public function firm(Request $request)
    {
        $data = $request->all();
        $searchString = '%' . $data['search_firm'] . '%';
        $items = Firm::where('name', 'LIKE', $searchString)->get();

        return response()->json($items);
    }

    public function searchFirmCategory(Request $request)
    {
        $data = $request->all();
        $searchString = '%' . $data['search_category'] . '%';
        $items = Category::where('name', 'LIKE', $searchString)->get();

        foreach($items as $item) {
            $this->categories[] = ['id' => $item->id, 'name' => $item->name];
            $this->searchChild($item->id);
        }

        return $this->searchFirms($this->categories);
    }

    private function searchChild($parentId)
    {
        $items = Category::where('parent_id', '=', $parentId)->get();

        foreach ($items as $item) {

            $this->categories[] = ['id' => $item->id, 'name' => $item->name];
             $this->searchChild($item->id);
        }
    }

    private function searchFirms($categories)
    {
        foreach ($categories as $category) {
            $result = Category::find($category['id']);

            foreach ($result->firms as $firm) {
                $this->firms[] = ['id' => $firm->id, 'name' => $firm->name];
            }
        }

        return response()->json($this->firms);
    }
}
