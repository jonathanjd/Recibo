<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $clientes = Cliente::buscar($request->buscar)->orderBy('id','desc')->paginate(5);
        return view('admin.cliente.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = new Cliente($request->all());
        $cliente->save();
        flash('Cliente Registrado', 'success');

        if ($request->modal == 'modal-cliente') {
            # code...
            return redirect()->route('admin.invoice.create');
        }else {
            # code...
            return redirect()->route('admin.cliente.show',[$cliente]);
        }

        
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
        $cliente = Cliente::find($id);
        return view('admin.cliente.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::find($id);

        return view('admin.cliente.edit')->with('cliente', $cliente);
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
        //
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();
        flash('Cliente Editado', 'success');
        return redirect()->route('admin.cliente.show',[$cliente]);
    }

    public function delete($id)
    {
        //
        $cliente = Cliente::find($id);
        return view('admin.cliente.delete')->with('cliente', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cliente = Cliente::find($id);
        $cliente->delete();
        flash('Cliente Eliminado', 'success');
        return redirect()->route('admin.cliente.index');
    }
}
