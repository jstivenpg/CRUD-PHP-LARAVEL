<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()

    { $this->middleware('auth'); }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { return view('Cliente.create'); }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,['nombre'=>'required','documento'=>'required|numeric','correo'=>'required','direccion'=>'required','rol'=>'required',]);
       Cliente::create($request->all());
       return redirect()->route('home')->with('success','Registro creado Satisfactoriamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registros1 = Cliente::find($id);
        return view('Cliente.edit', compact('registros1'));
    }

    public function delete($id)
    {
        Cliente::find($id)->delete();     
        return redirect()->route('home')->with('success','Registro eliminado satisfactoriamente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cliente::find($id)->update($request->all());
        return redirect()->route('home')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::find($id)->delete();     
       return redirect()->route('home')->with('success','Registro eliminado satisfactoriamente');
    }
}