<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function checkout(Request $request)
    {
    	$this->data['requestData'] = $request->all();
    	return view('checkout', $this->data);
    }
    public function pembayaran(Request $request)
    {
    	$this->data['requestData'] = $request->all();
    	return view('pembayaran', $this->data);
    }
}
