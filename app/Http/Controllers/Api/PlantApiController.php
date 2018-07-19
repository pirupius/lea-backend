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
        if (isset($request->date)) {
            $start_date = Carbon::parse($request->date);
        } else {
            $start_date = Carbon::now();
        }

        $planting_date = $start_date->toDateString();
        $tracker = array();

        foreach ([0, 7, 21, 49, 91, 147, 213, 283] as $days) {
            switch ($days) {
                case 0:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'VE',
                        'days'        => $days,
                        'description' => 'Emergence',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 7:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V2',
                        'days'        => $days,
                        'description' => '2 leaves fully emerged',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 21:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V5',
                        'days'        => $days,
                        'description' => '5 leaves fully emerged, tassel and ear/cob initiation',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 49:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V8',
                        'days'        => $days,
                        'description' => '8 leaves fully emerged',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 91:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V12',
                        'days'        => $days,
                        'description' => '12 leaves',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 147:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'VT',
                        'days'        => $days,
                        'description' => '16 leaves',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 213:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'R1',
                        'days'        => $days,
                        'description' => '20 leaves, pollination',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 283:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'VE',
                        'days'        => 'More than '.$days,
                        'description' => 'Maturity',
                        'date'        => $date->format('l jS \\of F Y'),
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
