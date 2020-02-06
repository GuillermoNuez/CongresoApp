<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserCustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.index")->with(['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        return view("User.create");
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

            "name"=>"required",
            "email"=>"required",
            "type"=>"required",
            "password"=>"required"
        ]);
        
        $user = new User([
            
            "name" => $request->get("name"),
            "email" => $request->get("email"),
            "type" => $request->get("type"),
            "password" => $request->get("password"),
        ]);
        
        $user->save();
        
        return redirect()->route('User.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);   
        return view("User.edit")->with(['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        $user = User::find($id);
        // echo $id;
        $user->type = $request['type'];
        $user->save();
        return view("User.index")->with(['users' => User::all()]);
    }

    public function destroy($id)
    {
        $user = User::find( $id );
        $user->delete();
    }
}
