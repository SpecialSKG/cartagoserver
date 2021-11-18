<?php

namespace App\Http\Controllers;

use App\Models\Donaciones;
use Illuminate\Http\Request;

class DonacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.donacion');
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
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Donaciones $donaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Donaciones $donaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donaciones $donaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donaciones  $donaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donaciones $donaciones)
    {
        //
    }
}
