<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\House;

class HouseController extends Controller
{
    public function findHouse(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $name = $data[0]['value'];
        $priceFrom = $data[1]['value'];
        $priceTo = $data[2]['value'];
        $bedrooms = $data[3]['value'];
        $bathrooms = $data[4]['value'];
        $storeys = $data[5]['value'];
        $garages = $data[6]['value'];

        $query = House::select('name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages');

        if(!empty($name)){
            $query = $query->where('name', 'LIKE', '%'.$name.'%');
        }
        if(!empty($priceFrom)){
            $query = $query->where('price', '>=', $priceFrom);
        }
        if(!empty($priceTo)){
            $query = $query->where('price', '<=', $priceTo);
        }
        if(!empty($bedrooms)){
            $query = $query->where('bedrooms', '=', $bedrooms);
        }
        if(!empty($bathrooms)){
            $query = $query->where('bathrooms', '=', $bathrooms);
        }
        if(!empty($storeys)){
            $query = $query->where('storeys', '=', $storeys);
        }
        if(!empty($garages)){
            $query = $query->where('garages', '=', $garages);
        }

        return $query->get();
    }
}
