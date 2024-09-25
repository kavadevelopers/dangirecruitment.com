<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\PagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller{


    public function delete($item = false){
        $row = PagesModel::where('is_deleted','0')->where('id',decrypt($item))->first();
        if($item && $row){
            $row->is_deleted = '1';
            $row->save();
            Session::flash('success', 'Page Deleted');    
        }
        return Redirect(CommonHelper::admin('pages'));
    }

    public function update(Request $request){
        $page = PagesModel::find($request->item);
        if($page){
            $page->slug = CommonHelper::pageSlug($request->title,$page->id);
            $page->title = $request->title;
            $page->body = CommonHelper::isColValue($request->body);
            $page->save();

            Session::flash('success', 'Page Updated');    
        }
	    return Redirect(CommonHelper::admin('pages'));
    }

    public function edit($item = false){
        $row = PagesModel::where('is_deleted','0')->where('id',decrypt($item))->first();
        if($item && $row){

            $data['_title'] = 'Page Edit';
            $data['item']   = $row;
            return view('admin.user.pages.edit',$data);
        }
        return Redirect(CommonHelper::admin('pages'));
    }

    public function save(Request $request){
        $data = [
            'slug'              => CommonHelper::pageSlug($request->title),
            'title'              => $request->title,
            'body'              => CommonHelper::isColValue($request->body), 
        ];

        PagesModel::create($data);

        Session::flash('success', 'Page Created');
	    return Redirect(CommonHelper::admin('pages'));
    }
    
    public function create(){
        $data['_title'] = 'Create Page';
        return view('admin.user.pages.create',$data);
    }

    public function index(){
        $data['_title'] = 'Manage Pages';
        $data['list']   = PagesModel::where('is_deleted','0')->orderby('id','desc')->get();
        return view('admin.user.pages.index',$data);
    }
}
