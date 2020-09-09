<?php

namespace App\Http\Controllers;

use App\Darbuotojas;
use Illuminate\Http\Request;

class DarbuotojasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('darbuotojai.index', ['darbuotojai' =>Darbuotojas::orderBy('id')->get()]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('darbuotojai.create');
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
     * @param  \App\Darbuotojas  $darbuotojas
     * @return \Illuminate\Http\Response
     */
    public function show(Darbuotojas $darbuotojas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Darbuotojas  $darbuotojas
     * @return \Illuminate\Http\Response
     */
    public function edit(Darbuotojas $darbuotojas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Darbuotojas  $darbuotojas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Darbuotojas $darbuotojas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Darbuotojas  $darbuotojas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Darbuotojas $darbuotojas)
    {
        //
    }
}
