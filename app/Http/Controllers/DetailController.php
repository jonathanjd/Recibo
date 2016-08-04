<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreDetailRequest;

use App\Http\Requests\UpdateDetailRequest;

use App\Http\Requests;

use App\Detail;

use Carbon\Carbon;

class DetailController extends Controller
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
    public function index()
    {
        //
    }

    public function lista(Request $request)
    {

        if ($request->optionsRadiosA == 'Reparado' && $request->optionsRadiosB == 'Entregado') {

            $details = Detail::reparada()->entregado()->orderBy('updated_at','desc')->paginate(10);

        }elseif($request->optionsRadiosA == 'Reparado' && $request->optionsRadiosB == 'NoEntregado'){

            $details = Detail::reparada()->noEntregado()->orderBy('updated_at','desc')->paginate(10);

        }elseif($request->optionsRadiosA == 'NoReparado' && $request->optionsRadiosB == 'Entregado'){

            $details = Detail::noReparada()->entregado()->orderBy('updated_at','desc')->paginate(10);

        }elseif($request->optionsRadiosA == 'NoReparado' && $request->optionsRadiosB == 'NoEntregado'){

            $details = Detail::noReparada()->noEntregado()->orderBy('updated_at','desc')->paginate(10);

        }else{

            $details = Detail::buscar($request->buscar)->orderBy('updated_at','desc')->paginate(10);

        }

        return view('admin.detail.index')->with('details', $details);
    }

    public function calendario_mensual()
    {
        # code...
        $dt = Carbon::now();
        return view('admin.detail.calendario-mensual')->with('dt',$dt);
    }

    public function calendario_anual()
    {
        # code...
        $dt = Carbon::now();
        return view('admin.detail.calendario-anual')->with('dt',$dt);
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

    public function cambiarEstado($id)
    {
        # code...
        $detail = Detail::find($id);
        $detail->estado = 'Reparada';
        $detail->save();
        flash('Detalle Editado','success');
        return redirect()->route('admin.index');
    }

    public function cambiarEntregado($id)
    {
        # code...
        $detail = Detail::find($id);
        $detail->entregado = 'Si';
        $detail->save();
        flash('Detalle Editado','success');
        return redirect()->route('admin.index');
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
