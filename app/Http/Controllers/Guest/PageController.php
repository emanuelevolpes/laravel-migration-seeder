<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    public function index() {

        $trains = Train::all()
            ->where('departure_time', '>=', SupportCarbon::today());

        return view('home', compact('trains'));
    }
}
