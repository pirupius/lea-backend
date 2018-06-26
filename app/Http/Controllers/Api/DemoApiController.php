<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class DemoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        return Response::json([
            'news' => News::all()->toArray(),
            'success' => 1
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function suppliers()
    {
        return Response::json([
            'suppliers' => Supplier::all()->toArray(),
            'success' => 1
        ], 200);
    }


    public function tracker(Request $request)
    {
        if (isset($request->date)) {
            $start_date = Carbon::parse($request->date);
        } else {
            $start_date = Carbon::now();
        }

        $tracker = array();

        foreach ([0, 7, 14, 28, 42, 56, 66, 70] as $days) {
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

                case 14:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V5',
                        'days'        => $days,
                        'description' => '5 leaves fully emerged, tassel and ear/cob initiation',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 28:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V8',
                        'days'        => $days,
                        'description' => '8 leaves fully emerged',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 42:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'V12',
                        'days'        => $days,
                        'description' => '12 leaves',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 56:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'VT',
                        'days'        => $days,
                        'description' => '16 leaves',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 66:
                    $date = $start_date->addDays($days);
                    array_push($tracker, [
                        'stage'       => 'R1',
                        'days'        => $days,
                        'description' => '20 leaves, pollination',
                        'date'        => $date->format('l jS \\of F Y'),
                    ]);
                    break;

                case 70:
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
            'tracker' => $tracker,
            'success' => 1
        ], 200);
    }
}
