<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\HeadersModel;
use App\Models\HomeSliderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CMSController extends Controller
{

    public function menuSave(Request $request){
        $row = HeadersModel::find($request->item);
        if($row){
            $row->title = $request->title;
            $row->description = CommonHelper::isColValue($request->description);
            $row->page_ids = '';
            if($request->pages){
                $rights = '';
                foreach ($request->pages as $key => $value) {
                    $rights .= $value.',';
                }
                $rights = rtrim($rights,',');
                $row->page_ids = $rights;
            }


            $row->save();

            Session::flash('success', 'Menu Updated');    
        }
        return Redirect(CommonHelper::admin('cms/menus'));
    }

    public function menuEdit($item){
        $row = HeadersModel::find(decrypt($item));
        if($row){
            $data['_title'] = 'Edit Menu';
            $data['item']   = $row;
            $data['type']   = 'edit';
            return view('admin.user.cms.menus',$data);
        }else{
            return Redirect(CommonHelper::admin('cms/menus'));
        }
    }

    public function menuList(){
        $data['_title'] = 'Menus';
        $data['list']   = HeadersModel::get();
        $data['type']   = 'list';
        return view('admin.user.cms.menus',$data);
    }



    public function homeSlidersList(){
        $data['_title'] = 'Home Sliders';
        $data['list']   = HomeSliderModel::orderby('sort','asc')->get();
        return view('admin.user.cms.home_sliders',$data);
    }

    public function homeSlidersDelete($item = false){
        $row = HomeSliderModel::find(decrypt($item));
        if($item && $row){

            if(Storage::disk('public')->exists('cms/homebanner/'.$row->image)){
                Storage::disk('public')->delete('cms/homebanner/'.$row->image);
            }

            $row->delete();



            Session::flash('success', 'Banner Deleted');
	        return Redirect(CommonHelper::admin('cms/home-sliders'));
        }else{
            return Redirect(CommonHelper::admin('cms/home-sliders'));
        }
    }

    public function homeSlidersSave(Request $rec){
        $banner = "";
        if ($rec->hasFile('banner')) {
            $image      = $rec->file('banner');
            $imgName   = microtime(true) . '.' . $image->getClientOriginalExtension();
            if(Storage::disk('public')->put('cms/homebanner/'.$imgName, file_get_contents($image))) {
                $banner = $imgName;
            }
        }

        $data = [
            'title'             => $rec->title,
            'subtitle'          => $rec->subtitle,
            'image'             => $banner,
            'sort'              => CommonHelper::isColValue($rec->order), 
        ];

        HomeSliderModel::create($data);

        Session::flash('success', 'Home Slider Added');
	    return Redirect(CommonHelper::admin('cms/home-sliders'));
    }
}
