<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auditoria;
use App\Categoria;
class AuditoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $cate = Categoria::all();
        $aud = Auditoria::all();
        return view('auditoria.index')->with('Categorias', $cate)->with('Auditorias', $aud);
        
    }
    public function index2(){
        $categoria1 = Categoria::find(1);
        $categoria2 = Categoria::find(2);
        $categoria3 = Categoria::find(3);
        $categoria4 = Categoria::find(4);
        $categoria5 = Categoria::find(5);
        $categoria6 = Categoria::find(6);
        $categoria7 = Categoria::find(7);
        $categoria8 = Categoria::find(8);
        $categoria9 = Categoria::find(9);
        $categoria10 = Categoria::find(10);
        $categoria11 = Categoria::find(11);
        $categoria12 = Categoria::find(12);
        $categoria13 = Categoria::find(13);
        $categoria14 = Categoria::find(14);
        $categoria15 = Categoria::find(15);
        $categoria = Categoria::all();
        return view('auditoria.index',[
            'Auditorias' => Auditoria::all(),
            'Categorias' =>  $categoria,
            'Categorias1' => $categoria1,
            'Categorias2' => $categoria2,
            'Categorias3' => $categoria3,
            'Categorias4' => $categoria4,
            'Categorias5' => $categoria5,
            'Categorias6' => $categoria6,
            'Categorias7' => $categoria7,
            'Categorias8' => $categoria8,
            'Categorias9' => $categoria9,
            'Categorias10' => $categoria10,
            'Categorias11' => $categoria11,
            'Categorias12' => $categoria12,
            'Categorias13' => $categoria13,
            'Categorias14' => $categoria14,
            'Categorias15' => $categoria15,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('auditoria.create',[
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
        $auditoria = new Auditoria();
        $auditoria->concepto = $validData['concepto'];
        $auditoria->centro_resultado = $validData['centro_resultado'];
        $auditoria->acumulado = $validData['acumulado'];       
        $auditoria->categoria_id = $validData['categoria_id'];
        $auditoria->save();
        return redirect('auditoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auditoria = Auditoria::findOrFail($id);
        return view('auditoria.show',[
            'Auditorias' => $auditoria,
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
        $auditoria = Auditoria::findOrFail($id);
        return view('auditoria.edit',[
            'Auditorias' => $auditoria,
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
        $validData = $request->validate([
            'concepto'=>'required|min:3|max:20',
            'centro_resultado'=>'required|integer',
            'acumulado'=>'required|integer',
            'categoria_id'=>'required',
        ]);
        $auditoria = Auditoria::findOrFail($id);
        $auditoria->concepto = $validData['concepto'];
        $auditoria->centro_resultado = $validData['centro_resultado'];
        $auditoria->acumulado = $validData['acumulado'];       
        $auditoria->categoria_id = $validData['categoria_id'];
        $auditoria->save();
        return redirect('auditoria');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auditoria = Auditoria::findOrFail($id);
        $auditoria -> delete();
        return redirect('auditoria');
    }
}
