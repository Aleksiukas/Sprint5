<?php

namespace App\Http\Controllers;

use App\Pojektas;
use Illuminate\Http\Request;

class PojektasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('pojektai.index', ['pojektai' =>Pojektas::orderBy('id')->get()]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pojektai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pojektas = new Pojektas();
       
        $pojektas->fill($request->all());
        $pojektas->save();
        return redirect()->route('projektas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pojektas  $pojektas
     * @return \Illuminate\Http\Response
     */
    public function show(Pojektas $pojektas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pojektas  $pojektas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pojektas $pojektas)
    {
       }
       
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pojektas  $pojektas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pojektas $pojektas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pojektas  $pojektas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pojektas $pojektas)
    {
        //
    }
}
