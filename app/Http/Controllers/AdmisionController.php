<?php

namespace App\Http\Controllers;

use App\Admision;
use Illuminate\Http\Request;

class AdmisionController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        
        if ($buscar==''){
            $admisiones = Admision::orderBy('id', 'desc')->paginate(3);
        }
        else{
            $admisiones = Admision::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(3);
        }
        
    
        return [
            'pagination' => [
                'total'        => $admisiones->total(),
                'current_page' => $admisiones->currentPage(),
                'per_page'     => $admisiones->perPage(),
                'last_page'    => $admisiones->lastPage(),
                'from'         => $admisiones->firstItem(),
                'to'           => $admisiones->lastItem(),
            ],
            'admisiones' => $admisiones
        ];
    }

   

    
    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $admisione = new Admision();
        $admisione->nombres_apo = $request->nombres_apo;
        $admisione->dni_apo = $request->dni_apo;
        $admisione->nombres_estud = $request->nombres_estud;
        $admisione->dni_estud = $request->dni_estud; 
        $admisione->telefono = $request->telefono;
        $admisione->email = $request->email;
        $admisione->nivel = $request->nivel;
        $admisione->save();
    }
    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $admisione = Admision::findOrFail($request->id);
        $admisione->nombres_apo = $request->nombres_apo;
        $admisione->dni_apo = $request->dni_apo;
        $admisione->nombres_estud = $request->nombres_estud;
        $admisione->dni_estud = $request->dni_estud; 
        $admisione->telefono = $request->telefono;
        $admisione->email = $request->email;
        $admisione->nivel = $request->nivel;
        $admisione->save();
    }

    public function destroy(Request $request){
        $admisione=Admision::findOrFail($request->id);
        $admisione->delete();
    }

}
