<?php

namespace App\Http\Controllers\Api;

use App\Models\Farmer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class FarmersApiController extends Controller
{
    /**
     * Find farmer by phone number and return their user data.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $farmer = Farmer::where('phone', $request->phone)->first();

        if ($farmer) {
            return Response::json([
                    'success' => 1,
                    'error'   => false,
                    'farmer'  => $farmer
                ], 200);
        } else {
            return Response::json([
                'success' => 0,
                'error'   => true,
                'error_msg' => "We can't find that account. Please register."
            ], 302);
        }
    }

    /**
     * Register new farmer to database.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $farmer = new Farmer($request->all());
        if (!$farmer->save()) {
            return Response::json([
                'success' => 0,
                'error'   => true,
                'error_msg' => "Failed to save data. Please verify your data and try again."
            ], 302);
        } else {
            return Response::json([
                    'success' => 1,
                    'error'   => false,
                    'farmer'  => $farmer
                ], 200);
        }
    }
}
