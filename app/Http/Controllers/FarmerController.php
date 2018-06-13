<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function index()
    {
        $farmers = Farmer::paginate(20);
        return view('farmers.index', compact(['farmers']));
    }
}
