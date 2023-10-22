<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function ObtenerClientes(){
        return Clientes::all();
    }

    public function ObtenerClientesPorUUID($UUID){
        return Clientes::find($UUID);
    }

    public function Insertar(Request $request){
        return Clientes::create([
            'UUID'=> $request -> UUID,
            'lat'=> $request -> lat,
            'lon'=> $request -> lon,
            'speed'=> $request -> speed,
            'T'=> $request -> T,
            'location'=> $request -> location,
            'Pwr'=> $request -> Pwr,
            'Door'=> $request -> Door,
            'ACC' => $request -> ACC
        ]);
    }
}
