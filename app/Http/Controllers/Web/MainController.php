<?php

namespace App\Http\Controllers\Web;

use App\Helpers\CommonHelper;
use App\Helpers\PMailer;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use App\Models\EnquiryModel;
use App\Models\HeadersModel;
use App\Models\HomeSliderModel;
use App\Models\PagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

    // public function menu($menu){
    //     $header = HeadersModel::where('slug',$menu)->first();
    //     if($header){
    //         $data['_title'] = $header->title;
    //         $data['page'] = $header;
    //         return view('web.page',$data);
    //     }else{
    //         return abort(404);
    //     }
    // }

    

    public function page($menu,$slug){
        $header = HeadersModel::where('slug',$menu)->first();
        if($header){
            $page = PagesModel::where('slug',$slug)->wherein('id',explode(',',$header->page_ids))->where('is_deleted','0')->first();
            if($page){
                $data['_title'] = $page->title;
                $data['page'] = $page;
		        return view('web.page',$data);
            }else{
                return abort(404);
            }
        }else{
            return abort(404);
        }
    }

    public function blogSingle($slug){
        $row = BlogModel::where('is_deleted','0')->where('slug',$slug)->first();
        if($row){
            $data['_title'] = $row->title;
            $data['item']   = $row;
            return view('web.blog-single',$data);
        }else{
            return abort(404);
        }
    }

    public function blog(){
        $data['_title'] = 'Blog';
        $data['list']   = BlogModel::where('is_deleted','0')->orderby('id','desc')->get();
		return view('web.blog',$data);
    }

    public function about(){
        $data['_title'] = 'About Us';
		return view('web.about',$data);
    }

    public function contact(){
        $data['_title'] = 'Contact';
		return view('web.contact',$data);
    }

    public function home(){
        $data['_title'] = 'Home';
        $data['list']   = BlogModel::where('is_deleted','0')->limit(4)->orderby('id','desc')->get();
		return view('web.home',$data);
    }

    public function contactSave(Request $rec){

        EnquiryModel::create([
            'name'  => $rec->name,
            'email'  => $rec->email,
            'phone'  => $rec->phone,
            'company'  => $rec->company,
            'message'  => $rec->message
        ]);

        $data['name'] = $rec->name;
        $data['email'] = $rec->email;
        $data['message'] = $rec->message;
        $data['phone'] = $rec->phone;
        $data['company'] = $rec->company;
        $body = view('emails.inquiry',$data)->render();
        PMailer::send(CommonHelper::getsetting('mail_notification_email'),'Inquiry - '.$rec->name,$body);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect()->back();
    }

    public function global(){
        $data['_title'] = 'Global';
		return view('web.pages.global',$data);
    }

    public function howWeOperate(){
        $data['_title'] = 'How we operate';
		return view('web.pages.how-we-operate',$data);
    }

    public function itDataSecurity(){
        $data['_title'] = 'IT & Data Security';
		return view('web.pages.it-and-data-security',$data);
    }

    public function offShoring(){
        $data['_title'] = 'Offshoring';
		return view('web.pages.offshoring',$data);
    }

    public function globalServices(){
        $data['_title'] = 'Our Valuable Services';
		return view('web.pages.global-services',$data);
    }

    

    public function placement(){
        $data['_title'] = 'Placement';
		return view('web.pages.placement',$data);
    }

    public function training(){
        $data['_title'] = 'Training';
		return view('web.pages.training',$data);
    }

    public function consultancy(){
        $data['_title'] = 'Consultancy';
		return view('web.pages.consultancy',$data);
    }

    public function conBusinessSetup(){
        $data['_title'] = 'Business Setup';
		return view('web.pages.con-business-setup',$data);
    }
    public function conTaxCompliances(){
        $data['_title'] = 'Tax & Compliances';
		return view('web.pages.con-tax-compliances',$data);
    }
    public function conFinanceSub(){
        $data['_title'] = 'Finance & Subsidy';
		return view('web.pages.con-finance-subsidy',$data);
    }
    public function conVirAcCFO(){
        $data['_title'] = 'Virtual Accountant & cfo';
		return view('web.pages.virtual-accountant-cfo',$data);
    }
    public function conOtherServices(){
        $data['_title'] = 'Other Services';
		return view('web.pages.con-other-service',$data);
    }
}
