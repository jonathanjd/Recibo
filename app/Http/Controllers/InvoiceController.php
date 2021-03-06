<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\StoreInvoiceRequest;

use App\Http\Requests\UpdateInvoiceRequest;

use Carbon\Carbon;

use App\Invoice;

use App\Cliente;

class InvoiceController extends Controller
{

    
    public function __construct()
    {
        Carbon::setlocale('es');
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
        $invoices = Invoice::buscar($request->buscar)->orderBy('id','desc')->paginate(5);
        return view('admin.invoice.index')->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $now = Carbon::now();
        $lastInvoice = Invoice::last();
        $clientes = Cliente::buscar($request->buscar)->orderBy('id','desc')->take(10)->get();
        return view('admin.invoice.create')->with('now',$now)->with('lastInvoice',$lastInvoice)->with('clientes',$clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
        $invoice = new Invoice($request->all());
        $invoice->save();
        flash('Factura Creado', 'success');
        return redirect()->route('admin.invoice.show',[$invoice]);
    
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
        $invoice = Invoice::find($id);
        
        return view('admin.invoice.show')->with('invoice', $invoice);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, $id)
    {
        //
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
    }
}
