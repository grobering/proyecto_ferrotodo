<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Material;
use App\Venta;

class VentaController extends Controller
{
	public function index()
    {
        $users = Venta::get();
        return view('ventas.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$material = Material::get();
    	$proveedor = Cliente::get();
        return view('ventas.create', compact('material'), compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Venta();
        $user->material_id = $request->material_id;
        $user->cantidad = $request->cantidad;
        $user->cliente_id = $request->proveedor_id;
        $user->user_id = $request->user_id;
        $user->save();

        //ACTUALIZAR CANTIDAD DE MATERIALES
        $material = Material::find($request->material_id);
		$material->cantidad = $material->cantidad - $request->cantidad;
        $material->save();

        return redirect()->route('ventas.index');
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
    	/*$categoria = Categoria::get();
        $user = Compra::find($id);
        return view('materiales.edit', compact('user'), compact('categoria'));*/
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
        /*$user = Compra::find($id);
        $user->nombre = $request->nombre;
		$user->categoria_id = $request->categoria_id;
        $user->save();
        return redirect()->route('materiales.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$user = Compra::find($id);
        $user->delete();
        return back();*/
    }
}
