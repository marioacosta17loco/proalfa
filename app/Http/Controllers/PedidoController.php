<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Barryvdh\DomPDF\Facade\Pdf;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::paginate(10);
        return view('pedidos.index', compact('pedidos'));
    }
    
    public function create()
    {
        $cartCollection = \Cart::getContent();
        return view('pedidos.crear')->with(['cartCollection' => $cartCollection]);;
    }

    public function pdf()
    {
        $cartCollection = \Cart::getContent();
       $pdf = PDF::loadView('pedidos.pdf', ['cartCollection' => $cartCollection]);
       return $pdf->download('reporte.pdf');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required', 'd_entrega' => 'required', 'telefono' => 'required',  'reporte' => 'required|file|mimes:pdf,docx,xlsx|max:10240'
        ]);
        
        $pedidos = $request->all();

        if($reporte = $request->file('reporte')) {
        $archivoReporte = date('YmdHis'). "." . $reporte->getClientOriginalExtension();        
        $rutaGuardarRep = 'reporte/';
        $reporte->move($rutaGuardarRep, $archivoReporte);
        $rep['reporte'] = "$archivoReporte";
        }
        Pedido::create([
            'cliente' => $request->cliente,
            'd_entrega' => $request->d_entrega,
            'telefono' => $request->telefono,
            'reporte' => $archivoReporte
        ]);   


         
    
         return redirect()->route('pedidos.confirmacion');
    }

    public function confirmacion()
    {
        return view('pedidos.confirmacion');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }
}


