<?php

namespace App\Http\Controllers;

use App\Models\Acerca;
use Illuminate\Http\Request;

class AcercaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.acerca');
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
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function show(Acerca $acerca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function edit(Acerca $acerca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acerca $acerca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acerca  $acerca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acerca $acerca)
    {
        //
    }
}
