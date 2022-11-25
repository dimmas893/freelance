<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\places;
use App\Models\Spa\Spa;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $places = Spa::with('city','photos', 'categories', 'favorites' , 'reviews')->get();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
