<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Categoria;

class MaterialController extends Controller
{
    public function index()
    {
        $users = Material::get();
        return view('materiales.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$categoria = Categoria::get();
        return view('materiales.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Material();
        $user->nombre = $request->nombre;
        $user->precio_c = 0;
        $user->precio_v = 0;
        $user->cantidad = 0;
        $user->categoria_id = $request->categoria_id;
        $user->save();
        return redirect()->route('materiales.index');
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
    	$categoria = Categoria::get();
        $user = Material::find($id);
        return view('materiales.edit', compact('user'), compact('categoria'));
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
        $user = Material::find($id);
        $user->nombre = $request->nombre;
		$user->categoria_id = $request->categoria_id;
        $user->save();
        return redirect()->route('materiales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Material::find($id);
        $user->delete();
        return back();
    }
}
