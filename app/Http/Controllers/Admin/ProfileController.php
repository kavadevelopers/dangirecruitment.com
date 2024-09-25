<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\EnquiryModel;
use App\Models\UserAdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{

	public function enquiries(){
		$data['_title'] = 'Enquiries';
		$data['list']   = EnquiryModel::orderby('id','desc')->limit(500)->get();		
		return view('admin.user.enquiries',$data);	
	}

    public function index(){
		$data['_title'] = 'My Profile';
		$data['item']	 = CommonHelper::getAdminUser();
		return view('admin.user.profile',$data);
	}

	public function profileSave(Request $rec){
		$data = [
			'name'			=> 	$rec->name,
			'username'		=> 	$rec->username,
			'email'			=> 	$rec->email,
			'mobile'		=> 	$rec->mobile
		];

		UserAdminModel::where('id',Auth::guard('admin')->user()->id)->update($data);

		if ($rec->password) {
			$data = [
				'password'		=> 	Hash::make($rec->password)
			];
			UserAdminModel::where('id',Auth::guard('admin')->user()->id)->update($data);
		}

		Session::flash('success', 'Profile updated.');
		return Redirect()->back();
	}
}
