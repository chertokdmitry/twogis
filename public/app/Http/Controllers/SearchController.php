<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;
use App\Firm;
use App\Category;

class SearchController extends Controller
{
    public $categories;
    public $firms;


    public function create()
    {
        $client = ClientBuilder::create()->build();

        $deleteParams = [
            'index' => 'firms'
        ];
        $client->indices()->delete($deleteParams);

        $items = Firm::all();

        foreach ($items as $item) {
            $params = [
                'index' => 'firms',
                'type' => 'all',
                'id' => $item->id,
                'body' => [
                    "id" => $item->id,
                    "name" => $item->name                ]
            ];

            $client->index($params);
        }

        echo "elastic updated";
    }

    public function firms($keyword)
    {
            $match = [
                'query' => [
                    'match' => [
                        'name' => $keyword
                    ]
                ]
            ];

            $searchResult = $this->getSearchResult('firms', $match);

            if($searchResult) {

                foreach ($searchResult as $item){

                    $ids[] = $item['_source']['id'];
                }

                $firms = Firm::whereIn('id', $ids)->get();

                return response()->json($firms);

            } else {

                return $this->notFoundView($keyword);
            }
    }

    public function notFoundView($keyword)
    {
        echo $keyword . 'not found';
    }

    public function getSearchResult($table, $match)
    {
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => $table,
            'type' => 'all',
            'body' => $match
        ];

        $response = $client->search($params);

        return $response['hits']['hits'];
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
