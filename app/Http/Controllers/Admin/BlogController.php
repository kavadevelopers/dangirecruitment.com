<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use App\Models\PagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function delete($item = false){
        $row = BlogModel::where('is_deleted','0')->where('id',decrypt($item))->first();
        if($item && $row){
            $row->is_deleted = '1';
            $row->save();
            Session::flash('success', 'Blog Deleted');    
        }
        return Redirect(CommonHelper::admin('blogs'));
    }

    public function update(Request $request){
        $page = BlogModel::find($request->item);
        if($page){
            if ($request->hasFile('banner')) {
                $image      = $request->file('banner');
                $banner   = microtime(true) . '.' . $image->getClientOriginalExtension();
                if(Storage::disk('public')->put('blog/'.$banner, file_get_contents($image))) {
                    Storage::disk('public')->delete('blog/'.$page->banner);
                    $page->banner = $banner;
                }
            }
            $page->slug = CommonHelper::blogSlug($request->title,$page->id);
            $page->title = $request->title;
            $page->category = $request->category;
            $page->posted_by = $request->posted_by;
            $page->body = CommonHelper::isColValue($request->body);
            $page->save();

            Session::flash('success', 'Blog Updated');    
        }
	    return Redirect(CommonHelper::admin('blogs'));
    }

    public function edit($item = false){
        $row = BlogModel::where('is_deleted','0')->where('id',decrypt($item))->first();
        if($item && $row){

            $data['_title'] = 'Blog Edit';
            $data['item']   = $row;
            return view('admin.user.blogs.edit',$data);
        }
        return Redirect(CommonHelper::admin('blogs'));
    }

    public function save(Request $request){
        $banner = "";
        if ($request->hasFile('banner')) {
            $image      = $request->file('banner');
            $banner   = microtime(true) . '.' . $image->getClientOriginalExtension();
            if(!Storage::disk('public')->put('blog/'.$banner, file_get_contents($image))) {
                $banner = "";
            }
        }
        $data = [
            'slug'              => CommonHelper::blogSlug($request->title),
            'banner'            => $banner,
            'title'             => $request->title,
            'category'          => $request->category,
            'posted_by'         => $request->posted_by,
            'body'              => CommonHelper::isColValue($request->body), 
        ];
        BlogModel::create($data);
        Session::flash('success', 'Blog Created');
	    return Redirect(CommonHelper::admin('blogs'));
    }
    
    public function create(){
        $data['_title'] = 'Create Blog';
        return view('admin.user.blogs.create',$data);
    }

    public function index(){
        $data['_title'] = 'Manage Blogs';
        $data['list']   = BlogModel::where('is_deleted','0')->orderby('id','desc')->get();
        return view('admin.user.blogs.index',$data);
    }
}
