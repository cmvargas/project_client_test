<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cliente_id)
    {
        $datos['pedidos'] = Pedido::where('cliente_id', $cliente_id)->get();
        $datos['cliente_id'] = $cliente_id;
        $datos['cliente'] = Cliente::where('id', $cliente_id)->get();
        return view('pedido.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cliente_id)
    {
        $cliente = Cliente::findOrFail($cliente_id);
        return view('pedido.create', compact('cliente'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $cliente_id)
    {
        $pedido = new Pedido;
        $pedido->descripcion_pedido = $request->descripcion_pedido;
        $pedido->cliente_id = $cliente_id;
        $pedido->save();

        return redirect('/cliente/'.$cliente_id.'/pedido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente_id, $pedido_id)
    {
        $datos['pedido'] = Pedido::where('id',$pedido_id)->get();
        $datos['cliente'] = Cliente::where('id',$cliente_id)->get();
        return view('pedido.edit', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cliente_id, $pedido_id)
    {
        Pedido::where('id', $pedido_id)->update(
            [
                'descripcion_pedido' => $request->nombres,
            ]
        );
        return redirect('/cliente/'.$cliente_id.'/pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente_id, $pedido_id)
    {
        Pedido::destroy($pedido_id);
        return redirect('/cliente/'.$cliente_id.'/pedido');
    }
}
