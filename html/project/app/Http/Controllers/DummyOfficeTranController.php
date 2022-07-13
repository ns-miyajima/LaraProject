<?php

namespace App\Http\Controllers;

use App\Models\OfficeTran;
use Illuminate\Http\Request;

class OfficeTranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officetran = OfficeTran::all();
        return $officetran;

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
     * @param  \App\Models\OfficeTran  $officeTran
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeTran $officeTran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfficeTran  $officeTran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficeTran $officeTran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfficeTran  $officeTran
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeTran $officeTran)
    {
        //
    }
}
