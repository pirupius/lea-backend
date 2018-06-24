<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Supplier;
use App\Models\Agroexpert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers = Farmer::all();
        $suppliers = Supplier::all();
        $agroexpert = Agroexpert::all();
        // $farmers_gender = new FarmersChart;
        // $farmers_gender->dataset('gender', 'pie', )
        $farmers_gender = $farmers->groupBy('gender');
        $farmers_district = $farmers->groupBy('district');

        return view('home', compact('farmers', 'farmers_gender', 'farmers_district', 'suppliers', 'agroexpert'));
    }
}
