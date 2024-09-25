<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
		$data['_title'] = 'Dashboard';
		return view('admin.user.dashboard',$data);	
	}

	
}
