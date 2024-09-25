<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function save(Request $rec){
		$data = $rec->all();
		foreach ($data as $key => $value) {
			SettingModel::where('item',$key)->update(['value' => CommonHelper::isColValue($value)]);
	    }
	    Session::flash('success', 'Settings saved.');
	    return Redirect()->back();
	}

	public function index(){
		$data['_title'] = 'Settings';
		return view('admin.settings.index',$data);
	}
}
