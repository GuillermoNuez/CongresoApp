<?php

namespace App\Http\Controllers;

use App\ponencia;
use App\pago;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PonenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ponencias=Ponencia::all();
        $pago= Pago::where('iduser',Auth::id())->first();

        return view('Ponencia.index', compact("ponencias","pago"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Ponencia.create")->with(['users' => User::all()]);
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
            "iduser"=>"required",
            "title"=>"required",
            "video"=>"required"
        ]);
        
        $ponencia = new ponencia([
            "iduser" => $request->get("iduser"),
            "title" => $request->get("title"),
            "video" => $request->get("video")
        ]);
        
        $ponencia->save();
        
        return redirect()->route('Ponencia.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ponencia = Ponencia::find($id);
        $pago= Pago::where('iduser',Auth::id())->first();

        return view('Ponencia.show', compact("ponencia","pago"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function edit(ponencia $ponencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ponencia $ponencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ponencia  $ponencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {  
        // $ponencia = Ponencia::find( $id );
        // $ponencia->delete();
    }
}
