<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Cliente;
use App\Usuario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { $this->middleware('auth'); }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registros = Usuario::orderBy('id', 'DESC')->paginate(4);
        $registros1 = Cliente::orderBy('id', 'DESC')->paginate(4);
        return view('home',compact(['registros','registros1']));
    }

    public function destroy($id)
    {
        

        // Usuario::find($id)->delete();
        // return redirect()->route('home')->with('success','Registro eliminado satisfactoriamente');


        // $registros = Usuario::whereId($id)->firstOrFail();
        // $registros->delete();
        // return redirect()->route('home')->with('success','Registro eliminado Satisfactoriamente');
    }

}