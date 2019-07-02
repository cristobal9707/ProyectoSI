<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoDeResultado;
use App\Cliente;
use App\Categoria;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registros.index', [
            'Registros' => EstadoDeResultado::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Cliente::all();
        return view('registros.create',[
            'Clientes' => $cliente,
        ]);
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'nombre' => 'required|min:3|max:30',
            'fecha' => 'required|min:3|max:40',
            'cliente_id' => 'required',
        ]);
        $estado = new EstadoDeResultado();
        $estado->nombre = $validData['nombre'];
        $estado->fecha = $validData['fecha'];
        $estado->cliente_id = $validData['cliente_id'];
        $estado->save();
        $categorias = Categoria::all();
        foreach($categorias as $categoria){
            $estado->relacionCategoria()->attach($categoria
            ,['total'=> 10]);
        }
        return redirect('registros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::all();
        $registro = EstadoDeResultado::find($id);
        $cliente = Cliente::all();
        return view('registros.show',[
            'Clientes' => $cliente,
            'Registros' => $registro,
            'Categorias' =>$categoria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = EstadoDeResultado::findOrFail($id);
        $cliente = Cliente::all();
        return view('registros.edit',[
            'Clientes' => $cliente,
            'Registros' => $registro
        ]);
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
        $validData = $request->validate([
            'nombre' => 'required|min:3|max:30',
            'fecha' => 'required|min:3|max:40',
            'cliente_id' => 'required',
        ]);
        $estado = EstadoDeResultado::findOrFail($id);
        $estado->nombre = $validData['nombre'];
        $estado->fecha = $validData['fecha'];
        $estado->cliente_id = $validData['cliente_id'];
        $estado->save();
        return redirect('registros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = EstadoDeResultado::findOrFail($id);
        $registro -> delete();
        return redirect('registros');
    }
}
