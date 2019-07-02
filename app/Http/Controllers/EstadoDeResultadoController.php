<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\EstadoDeResultado;
use App\Exports\EstadoDeResultadoExport;

class EstadoDeResultadoController extends Controller
{
    public function index()
    {
      $list = EstadoDeResultado::get();
      return view('list',compact('list'));
    }
    /**
     * Export to excel
     */
    public function exportExcel()
    {
      return Excel::download(new EstadoDeResultadoExport, 'list.xlsx');
    }
}
