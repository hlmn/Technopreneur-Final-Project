<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(Request $request)
    {
    	$this->data['requestData'] = $request->all();
    	return view('profile', $this->data);
    }
}
