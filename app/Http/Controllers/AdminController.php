<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

use App\Invoice;

use App\Detail;

use Carbon\Carbon;

use App\Template;

use App\Contact;

use App\Subscriber;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        Carbon::setlocale('es');
        $this->middleware('auth');
    }

    public function index()
    {
    	# code...
    	$clientes = Cliente::orderBy('id','desc')->take(10)->get();
    	$invoices = Invoice::orderBy('id','desc')->take(10)->get();
    	$reparadas = Detail::reparada()->orderBy('updated_at','asc')->get();
    	$noReparadas = Detail::noReparada()->orderBy('updated_at','asc')->get();
    	$entregados= Detail::entregado()->orderBy('updated_at','asc')->get();
    	$noEntregados = Detail::noEntregado()->orderBy('updated_at','asc')->get();

    	return view('admin.index')
    		->with('clientes',$clientes)
    		->with('invoices',$invoices)
    		->with('reparadas',$reparadas)
    		->with('noReparadas',$noReparadas)
    		->with('entregados',$entregados)
    		->with('noEntregados',$noEntregados)
    		;
    }

	public function miPlantilla()
	{
        $imagenes = Template::all();

        $contacts = Contact::all();

         $subscribers = Subscriber::all();

		return view('admin.mi_plantilla')->with('imagenes',$imagenes)->with('contacts',$contacts)->with('subscribers',$subscribers);
	}

}
