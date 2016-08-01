<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreDetailRequest;

use App\Http\Requests\UpdateDetailRequest;

use App\Http\Requests;

use App\Detail;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailRequest $request)
    {
        //
       
        $detail = new Detail($request->all());
        $detail->save();
        flash('Detalle Factura Creado', 'success');
        return redirect()->route('admin.invoice.show',[$detail->invoice_id]);
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
        //
        $detail = Detail::find($id);

        return view('admin.detail.edit')->with('detail',$detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailRequest $request, $id)
    {
        //
        $detail = Detail::find($id);
        $detail->fill($request->all());
        $detail->save();
        flash('Detalle Editado','success');
        return redirect()->route('admin.invoice.show',[$detail->invoice_id]);

    }

    public function delete($id)
    {
        //
        $detail = Detail::find($id);
        return view('admin.detail.delete')->with('detail', $detail);
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
        $detail = Detail::find($id);
        $invoice = $detail->invoice_id; 
        $detail->delete();
        flash('Detalle Eliminado', 'success');
        return redirect()->route('admin.invoice.show',[$invoice]);
    }
}
