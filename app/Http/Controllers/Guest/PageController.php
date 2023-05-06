<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all()
            ->where('departure_time', '2023-05-06 17:18:32');

        return view('home', compact('trains'));
    }
}
