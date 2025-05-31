<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;

class ClienteController extends Controller
{
    

    public function index (){


         $clientes = Cliente::get();

         return Inertia::render('Cliente/Index', [
            'clientes' => $clientes 
         
        ] );


    }
    public function create (){

        return Inertia::render('Cliente/Create');



    }
    public function store(Request $request)
    {
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'pri_ape' => 'required|string|max:255',
        'seg_ape' => 'required|string|max:255',
        'doc_tip' => 'required|string|max:9',
        'docu_num' => 'required|string|max:20|unique:clientes,docu_num',
        'telefono' => 'nullable|string|max:20',
        'direccion' => 'nullable|string|max:255',
    ]);

    Cliente::create($validated);

    return redirect()->route('cliente.index')->with('success', 'Cliente creado exitosamente.');
    }

}
