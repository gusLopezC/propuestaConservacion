<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\manobrias;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

use App\MedidasManiobras;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $maniobras = manobrias::all();
        return view('home', compact('maniobras'));
    }

    public function create()
    {
        $maniobras = manobrias::all();
        return view('maniobras.createmanionbra', compact('maniobras'));
    }

    public function save(Request $request)
    {
        // return $request;
        $maniobra = manobrias::create([
            'nombreManiobra' => $request->nombreManiobra,
            'tramos'  => $request->nombreManiobra,
            'metros'  => $request->nombreManiobra,
            'estatus'  => $request->estatus,
            'observaciones'  => $request->observaciones,
            'user_id'  => Auth::user()->id
        ]);
        $contador = 0;
        $total = 0;
        foreach ($request->tramos as $tramo) {

            //$resultado = $tramo * $request->metros[$contador];
            $medidadadManiobra = MedidasManiobras::create([
                'tramos'  => $tramo,
                'metros'  => $request->metros[$contador],
                'maniobra_id'  =>  $maniobra->id
            ]);

            $total =  $total + $tramo * $request->metros[$contador];


        }

        $maniobra->metros = $total;
        $maniobra->save();
        return redirect('/home');
    }


    public function destroy(manobrias $maniobra)
    {
        manobrias::destroy($maniobra->id);
        return redirect('/home');
    }
}
