<?php

namespace App\Http\Controllers;
use Auth;
use App\pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Pago.index")->with(['pagos' => Pago::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Pago.create");
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
            "document"=>"required"
        ]);
        
        
        
        $file = $request->file("document");

        $str =  $file->getClientOriginalName();
        $str = (explode(".",$str));
        $name=strval( Auth::id()) .".pdf";
        if ($str[1]==="pdf") {
            $file->move('assets/pagos/', $name);
            $pago = new Pago([
                "iduser" => Auth::id(),
                "document" => $name
            ]);
            $pago->save();

        }
        
        return redirect()->route('Ponencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(pago $pago)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago = Pago::find($id);   
        return view("Pago.edit")->with(['pago' => $pago]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = Pago::find($id);

        if($request['verified']=="on") {
          $user->verified=1;
        }
        else {
          $user->verified=0;
        }

        $user->save();
        return view("Pago.index")->with(['pagos' => Pago::all()]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(pago $pago)
    {
        //
    }
}
