<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::paginate(20);
        return view('suppliers.index', compact('suppliers'));
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
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suppliers $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy(suppliers $suppliers)
    {
        //
    }
}
