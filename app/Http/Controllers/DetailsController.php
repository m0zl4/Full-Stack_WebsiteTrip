<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripPackage;

class DetailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TripPackage::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();
        return view('pages.details', [
            'item' => $item
        ]);
    }

}
