<?php

namespace App\Http\Controllers;

use App\congreso;
use Illuminate\Http\Request;

class CongresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Congreso.index")->with(['congresos' => Congreso::all()]);
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
     * @param  \App\congreso  $congreso
     * @return \Illuminate\Http\Response
     */
    public function show(congreso $congreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\congreso  $congreso
     * @return \Illuminate\Http\Response
     */
    public function edit(congreso $congreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\congreso  $congreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, congreso $congreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\congreso  $congreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(congreso $congreso)
    {
        //
    }
}
