<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asesoria;
use App\Categoria;

class AsesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Categoria::all();
        $aud = Asesoria::all();
        return view('asesoria.index')->with('Categorias', $cate)->with('Asesorias', $aud);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('asesoria.create',[
            'Categorias' => $categoria
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
            'concepto'=>'required|min:3|max:20',
            'centro_resultado'=>'required|integer',
            'acumulado'=>'required|integer',
            'categoria_id'=>'required',
        ]);
        $asesoria = new Asesoria();
        $asesoria->concepto = $validData['concepto'];
        $asesoria->centro_resultado = $validData['centro_resultado'];
        $asesoria->acumulado = $validData['acumulado'];       
        $asesoria->categoria_id = $validData['categoria_id'];
        $asesoria->save();
        return redirect('asesoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asesoria = Asesoria::findOrFail($id);
        return view('asesoria.show',[
            'Asesorias' => $asesoria,
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
        $categoria = Categoria::all();
        $asesoria = Asesoria::findOrFail($id);
        return view('asesoria.edit',[
            'Asesorias' => $asesoria,
            'Categorias' => $categoria
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
        {
            $validData = $request->validate([
                'concepto'=>'required|min:3|max:20',
                'centro_resultado'=>'required|integer',
                'acumulado'=>'required|integer',
                'categoria_id'=>'required',
            ]);
            $asesoria = Asesoria::findOrFail($id);
            $asesoria->concepto = $validData['concepto'];
            $asesoria->centro_resultado = $validData['centro_resultado'];
            $asesoria->acumulado = $validData['acumulado'];       
            $asesoria->categoria_id = $validData['categoria_id'];
            $asesoria->save();
            return redirect('asesoria');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesoria = Asesoria::findOrFail($id);
        $asesoria -> delete();
        return redirect('asesoria');
    }
}
