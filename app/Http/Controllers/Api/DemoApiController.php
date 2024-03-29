<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Supplier;
use App\Models\Agroexpert;
use Illuminate\Http\Request;
use App\Models\ExtensionWorker;
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

    /**
     * Get all agronomists from the system.
     *
     * @return \Illuminate\Http\Response
     */
    public function agronomists()
    {
        return Response::json([
            'agronomists' => Agroexpert::all()->toArray(),
            'success' => 1
        ], 200);
    }


    /**
     * Get all extension workers from the system.
     *
     * @return \Illuminate\Http\Response
     */
    public function extension_workers()
    {
        return Response::json([
            'extension_workers' => ExtensionWorker::all()->toArray(),
            'success' => 1
        ], 200);
    }
}
