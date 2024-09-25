<?php
namespace App\Helpers;

use App\Models\BlogModel;
use Illuminate\Support\Str;
use App\Models\GlobalSettings;
use App\Models\PagesModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class CommonHelper{


    //Dynamic Functions
    public static function getAdminUser(){
        return Auth::guard('admin')->user();
    }

    // Globle Func
    public static function getsetting($key){
        return app(GlobalSettings::class)->get($key);
    }

    public static function generateOTP($length = 6){
        if($length == '4'){
            return mt_rand(1111,9999);
        }else{
            return mt_rand(111111,999999);
        }
    }


    //File Helpers
    public static function getBlogBanner($item){
        if(Storage::disk('public')->exists('blog/'.$item)){
            return url('storage/blog/'.$item);
        }else{
            return url('themes/thumbs/land.jpg');
        }
    }

    public static function getHomeBanner($item){
        if(Storage::disk('public')->exists('cms/homebanner/'.$item)){
            return url('storage/cms/homebanner/'.$item);
        }else{
            return url('themes/thumbs/land.jpg');
        }
    }


    //Slug Functions
    public static function pageSlug($name,$id = false){
        if($id){
            $exists = PagesModel::where('slug',$slug = Str::slug($name))->where('id','!=',$id)->exists();
        }else{
            $exists = PagesModel::where('slug',$slug = Str::slug($name))->exists();
        }
        if ($exists) {
            $max = PagesModel::where('name',$name)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    } 

    public static function blogSlug($name,$id = false){
        if($id){
            $exists = BlogModel::where('slug',$slug = Str::slug($name))->where('id','!=',$id)->exists();
        }else{
            $exists = BlogModel::where('slug',$slug = Str::slug($name))->exists();
        }
        if ($exists) {
            $max = BlogModel::where('name',$name)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }   


    // Static functions
    public static function _selected($val,$val1){
        if ($val == $val1) {
            return "selected";
        }else{
            return "";
        }
    }

    public static function read_more_hide($str,$length){
        $append = '..';
        if (strlen($str) > $length) {
            $delim = "~\n~";
            $str = substr($str, 0, strpos(wordwrap($str, $length, $delim), $delim)) . $append;
        } 
        return $str;
    }
    
    public static function isColValue($val){
        if ($val && $val != NULL && $val != "") {
            return $val;
        }else{
            return "";
        }
    }

    public static function isColValueDecInt($val){
        if ($val && $val != NULL && $val != "") {
            return $val;
        }else{
            return 0;
        }
    }

    public static function isValidRow($item,$key){
        if ($item) {
            return $item->$key;
        }else{
            return "";
        }
    }

    public static function retJson($array){
        return response()->json($array);
    }

    public static function menu($seg,$array,$parent = false){
        $ret = array("","","");
        $path = Request::segment($seg);
        if(!$parent){
            foreach($array as $a){
                if($path === $a){
                    $ret = array("active kava-active","active kava-active","pcoded-trigger kava-active");
                    break;
                }
            }
        }else{
            foreach($array as $a){
                if($parent == Request::segment($seg - 1) && $path === $a){
                    $ret = array("active kava-active","active kava-active","pcoded-trigger kava-active");
                }
            }
        }

        return $ret;
    }
    

    //DateTimeItems
    public static function dateOTPExpired($min = false){
        if($min){
            return Carbon::parse(date('Y-m-d H:i:s'))->addMinutes($min)->format('Y-m-d H:i:s');
        }else{
            return Carbon::parse(date('Y-m-d H:i:s'))->addMinutes(10)->format('Y-m-d H:i:s');
        }
    }

    public static function dateFormat($item,$format){
        if ($item != "" && $item != NULL) {
            return Carbon::parse($item)->format($format);
        }else{
            return "";
        }
    } 

    // URI Generaters
    public static function admin($link = false){
        if ($link) {
            return url('admin/'.$link);
        }else{
            return url('admin/login');
        }
    }
}