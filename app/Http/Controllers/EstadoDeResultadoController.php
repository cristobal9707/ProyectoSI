<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\EstadoDeResultado;
use App\Item;
use App\Categoria;
use App\Exports\EstadoDeResultadoExport;

class EstadoDeResultadoController extends Controller
{

    /**
     * Export to excel
     */
    public function exportExcel($id)
    {
      $categorias= Categoria::all();
      $registro = EstadoDeResultado::where('id','=',$id)->get();
      $items = Item::where('estado_de_resultados_id','=',$id)->select(['categoria_id','concepto','sucursal','total'])->get();
      $data = Item::select(['items.id','concepto','sucursal','total','categorias.nombre'])->join('categorias','categorias.id','=','items.categoria_id')->where('items.estado_de_resultados_id',$id)->get();
      return Excel::download(new EstadoDeResultadoExport($data), 'list.xlsx');
    }
}
