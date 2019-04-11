<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SakilaModel;
use Session;

class SakilaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function customer(){
    	$data['customer'] = SakilaModel::orderBy('customer_id', 'desc')->paginate(10);
    	//$data['customer_x'] = SakilaModel::where('customer_id', 10)->first();

    	//dd($data['customer']);
    	return view('customer', $data);
    }

    function tambah(Request $request){

    	$sakila = new SakilaModel();

    	$sakila->store_id = $request->store_id;
		$sakila->first_name = $request->first_name;
		$sakila->last_name = $request->last_name;
		$sakila->email = $request->email;
		$sakila->address_id = $request->address_id;
		$sakila->active = $request->active;
		$sakila->save();
    	return redirect('customer');

        

    }

    function update(Request $request, $customer_id){
        $sakila = new SakilaModel();
    	$sakila = SakilaModel::where('customer_id', $customer_id)->first();
        $sakila->store_id = $request->store_id;
		$sakila->first_name = $request->first_name;
		$sakila->last_name = $request->last_name;
		$sakila->email = $request->email;
        $sakila->address_id = $request->address_id;
        $sakila->active = $request->active;
		$sakila->save();
		return redirect('customer');

    }

    function delete($customer_id){
        
    	$sakila = SakilaModel::where('customer_id',$customer_id);
        $sakila->delete();

        Session::flash('success','Berhasil menghapus data Customer');
        
    	return redirect('customer');

    }
}
