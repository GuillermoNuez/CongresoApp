<?php

namespace App\Http\Controllers;
use Auth;
use App\userponencia;
use Illuminate\Http\Request;

class UserponenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $this->validate( $request, [
            "idponencia"=>"required"
        ]);
        
        $userponencia = new UserPonencia([
            
            "iduser" => Auth::id(),
            "idponencia" => $request->get("idponencia")
        ]);
        
        $userponencia->save();
        
        return  response()->download(public_path('assets/justificante/justificante.pdf'));
        return redirect()->route('Ponencia.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userponencia  $userponencia
     * @return \Illuminate\Http\Response
     */
    public function show(userponencia $userponencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userponencia  $userponencia
     * @return \Illuminate\Http\Response
     */
    public function edit(userponencia $userponencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userponencia  $userponencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userponencia $userponencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userponencia  $userponencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(userponencia $userponencia)
    {
        //
    }
}
