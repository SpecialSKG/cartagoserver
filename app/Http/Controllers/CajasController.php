<?php

namespace App\Http\Controllers;

use App\Models\Cajas;
use Illuminate\Http\Request;

class CajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.cajas');
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
     * @param  \App\Models\Cajas  $cajas
     * @return \Illuminate\Http\Response
     */
    public function show(Cajas $cajas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cajas  $cajas
     * @return \Illuminate\Http\Response
     */
    public function edit(Cajas $cajas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cajas  $cajas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cajas $cajas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cajas  $cajas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cajas $cajas)
    {
        //
    }
}
