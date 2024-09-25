<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Helpers\PMailer;
use App\Http\Controllers\Controller;
use App\Models\UserAdminModel;
use App\Models\VerificationCodeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logout(){
        Auth::guard('admin')->logout();
        return Redirect(CommonHelper::admin('/'));
    }

    public function resetPassword(Request $rec){
        $user = UserAdminModel::where('id',$rec->id)->first(); 
        if ($user) {
            $codeActive = VerificationCodeModel::where('code',$rec->code)
                ->where('user_id',$rec->id)
                ->where('user_type','admin')
                ->where('code_type','forget')->first();

            if ($codeActive) {
                if($codeActive->is_used == '1'){
                    return CommonHelper::retJson(['_return' => false,'msg' => "Verification code already used. Try Sending another code."]);          
                }else{
                    if(Carbon::now()->gt($codeActive->expired_at)){
                        return CommonHelper::retJson(['_return' => false,'msg' => "Verification code expired. Try Sending another code."]);           
                    }else{

                        VerificationCodeModel::where('id',$codeActive->id)->update([
                            'is_used'   => '1'
                        ]);

                        UserAdminModel::where('id',$rec->id)->update(['password' => Hash::make($rec->pass)]);
                        return CommonHelper::retJson(['_return' => true,'msg' => "Password Changed."]);  
                    }  
                }
            }else{
                return CommonHelper::retJson(['_return' => false,'msg' => "Verification code does not match"]);      
            }
        }else{
            return CommonHelper::retJson(['_return' => false,'msg' => "Error please try agin later"]); 
        }
    }

    public function forgetCheck(Request $rec){
        $user = UserAdminModel::where('email',$rec->email)->where('is_deleted','0')->first();
        if ($user) {
            $code = CommonHelper::generateOTP();

            VerificationCodeModel::create([
                'user_id'       => $user->id,
                'user_type'     => 'admin',
                'code_type'     => 'forget',
                'code'          => $code,
                'expired_at'    => CommonHelper::dateOTPExpired()
            ]);

            $msg = "Your verification code is :- ".$code;
            
            if(@PMailer::send($user->email,'Verification code',$msg)){
                return CommonHelper::retJson(['_return' => true,'msg' => "Verification code sent to your Email address",'user' => $user->id]); 
            }else{
                return CommonHelper::retJson(['_return' => false,'msg' => "We can't send email right now. Please contact administrator"]);  
            }
        }else{
            return CommonHelper::retJson(['_return' => false,'msg' => "We can't find account assigned with this email"]);  
        }
    }

    public function forget(){
        return view('admin.auth.forget');
    }

    public function login(Request $rec){
        $user = UserAdminModel::where('username',$rec->user)->where('is_deleted','0')->first();
        if($user){
            if (Hash::check($rec->pass, $user->password)) {
                if($user->is_blocked == '0'){
                    if(Auth::guard('admin')->attempt(['username' => $rec->user,'password' => $rec->pass])){
                        return CommonHelper::retJson([
                            '_return'   => true,
                            'message'   => 'Login Success...',
                            'redirect'  => CommonHelper::admin('dashboard')
                        ]);
                    }else{
                        return CommonHelper::retJson([
                            '_return'   => false,
                            'message'   => 'Login Failed.'
                        ]);        
                    }
                }else{
                    return CommonHelper::retJson([
                        '_return'   => false,
                        'message'   => 'Sorry. Your admin account for '.CommonHelper::getsetting('app_name').' is blocked please contact administrator.'
                    ]);
                }
            }else{
                return CommonHelper::retJson([
                    '_return'   => false,
                    'message'   => 'Sorry. Your password is not valid'
                ]);
            }
        }else{
            return CommonHelper::retJson([
                '_return'   => false,
                'message'   => 'Sorry. Your username is not registered'
            ]);
        }
    }
    
    public function index(){
        return view('admin.auth.login');
    }  
}
