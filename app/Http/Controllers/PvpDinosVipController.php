<?php

namespace App\Http\Controllers;

use App\Models\PvpDinosVip;
use Illuminate\Http\Request;

class PvpDinosVipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.pvpdinosvip');
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
     * @param  \App\Models\PvpDinosVip  $pvpDinosVip
     * @return \Illuminate\Http\Response
     */
    public function show(PvpDinosVip $pvpDinosVip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PvpDinosVip  $pvpDinosVip
     * @return \Illuminate\Http\Response
     */
    public function edit(PvpDinosVip $pvpDinosVip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PvpDinosVip  $pvpDinosVip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PvpDinosVip $pvpDinosVip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PvpDinosVip  $pvpDinosVip
     * @return \Illuminate\Http\Response
     */
    public function destroy(PvpDinosVip $pvpDinosVip)
    {
        //
    }
}
