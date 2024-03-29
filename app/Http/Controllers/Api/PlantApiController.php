<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PlantApiController extends Controller
{
    public function tracker(Request $request)
    {
        if (!isset($request->date)) {
            $request->date = Carbon::now()->toDateString();
        }

        $planting_date = Carbon::parse($request->date)->toDateString();
        $tracker = array();

        foreach ([0, 7, 14, 28, 42, 56, 66, 70] as $days) {
            switch ($days) {
                case 0:
                    array_push($tracker, [
                        'stage'       => 'VE',
                        'days'        => $days,
                        'description' => 'Emergence',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 7:
                    array_push($tracker, [
                        'stage'       => 'V2',
                        'days'        => $days,
                        'description' => '2 leaves fully emerged',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 14:
                    array_push($tracker, [
                        'stage'       => 'V5',
                        'days'        => $days,
                        'description' => '5 leaves fully emerged, tassel and ear/cob initiation',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 28:
                    array_push($tracker, [
                        'stage'       => 'V8',
                        'days'        => $days,
                        'description' => '8 leaves fully emerged',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 42:
                    array_push($tracker, [
                        'stage'       => 'V12',
                        'days'        => $days,
                        'description' => '12 leaves',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 56:
                    array_push($tracker, [
                        'stage'       => 'VT',
                        'days'        => $days,
                        'description' => '16 leaves',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 66:
                    array_push($tracker, [
                        'stage'       => 'R1',
                        'days'        => $days,
                        'description' => '20 leaves, pollination',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;

                case 70:
                    array_push($tracker, [
                        'stage'       => 'VE',
                        'days'        => 'More than '.$days,
                        'description' => 'Maturity',
                        'date'        => Carbon::parse($request->date)->addDays($days)->format('l jS \\of F Y'),
                    ]);
                    break;
            }
        }

        return Response::json([
            'tracker'       => $tracker,
            'planting_date' => $planting_date,
            'success' => 1
        ], 200);
    }
}
