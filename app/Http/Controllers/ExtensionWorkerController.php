<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtensionWorker;

class ExtensionWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extensionWorkers = ExtensionWorker::paginate(20);
        return view('extension-workers.index', compact('extensionWorkers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExtensionWorker  $extensionWorker
     * @return \Illuminate\Http\Response
     */
    public function show(ExtensionWorker $extensionWorker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExtensionWorker  $extensionWorker
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtensionWorker $extensionWorker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExtensionWorker  $extensionWorker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtensionWorker $extensionWorker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExtensionWorker  $extensionWorker
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtensionWorker $extensionWorker)
    {
        //
    }
}
