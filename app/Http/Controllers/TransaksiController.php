<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function checkout(Request $request)
    {
    	$this->data['kontol'] = 'a';
    	$this->data['requestData'] = $request->all();
    	return view('checkout', $this->data);
    }
}
