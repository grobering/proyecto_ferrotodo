<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\Material;
use App\Proveedor;

class CompraController extends Controller
{
    public function index()
    {
        $users = Compra::get();
        return view('compras.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$material = Material::get();
    	$proveedor = Proveedor::get();
        return view('compras.create', compact('material'), compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Compra();
        $user->material_id = $request->material_id;
        $user->cantidad = $request->cantidad;
        $user->precio_c = $request->precio_c;
        $user->precio_v = $request->precio_v;
        $user->proveedor_id = $request->proveedor_id;
        $user->user_id = $request->user_id;
        $user->save();

        //ACTUALIZAR CANTIDAD DE MATERIALES
        $material = Material::find($request->material_id);
		$material->cantidad = $material->cantidad + $request->cantidad;
        $material->precio_c = $request->precio_c;
        $material->precio_v = $request->precio_v;
        $material->save();

        return redirect()->route('compras.index');
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
