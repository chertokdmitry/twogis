<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Building;
use App\Firm;

class BuildingController extends Controller
{
    public function buildings($geo)
    {
        $view = view('building', ['items' => $this->getBuildings($geo)])->render();
        return (new Response($view));
    }

    public function firms($geo)
    {
        $buildings = $this->getBuildings($geo);
        $allFirms = [];
        foreach ($buildings as $building) {

            $firms = Firm::where('building_id', $building['id'])->get();
            foreach($firms as $firm){
                $allFirms[] = ['id' => $firm->id, 'name' => $firm->name];
            }
        }

        $view = view('firm', ['items' => $allFirms])->render();
        return (new Response($view));
    }

    public function getBuildings($geo)
    {
        $point = explode("_", $geo);
        $my_lat =  $point[0];
        $my_lon = $point[1];
        $allItems = [];
        $locations = Building::all();

        foreach ($locations as $location) {
            $distance = $this->haversine($my_lat, $my_lon, $location->geo_lat, $location->geo_lon);

            if($distance < 700) {

                $newItem =  [
                    'id' => $location->id,
                    'address' => $location->address,
                    'geo_lat' => $location->geo_lat,
                    'geo_lon' => $location->geo_lon];

                $allItems[] = $newItem;
            }
        }

        return $allItems;
    }

    private function haversine($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $earthRadius = 6371000;
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

        return $angle * $earthRadius / 1000;
    }
}
