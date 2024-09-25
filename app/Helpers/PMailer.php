<?php
namespace App\Helpers;

use App\Models\ReportErrorLogModel;
use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;

class PMailer{

    public static function send($to,$subject,$body,$file = false){
        try{
            $mail               = new PHPMailer(true);
            $mail->isSMTP();
            $mail->IsHTML(true);
            $mail->SMTPDebug    = 0;
            $mail->SMTPAuth     = true;
            $mail->SMTPSecure   = 'ssl';
            $mail->CharSet      = "utf-8";
            $mail->Host         = CommonHelper::getsetting('smtp_mail_host');
            $mail->Port         = CommonHelper::getsetting('smtp_mail_port');
            $mail->Username     = CommonHelper::getsetting('smtp_mail_user');
            $mail->Password     = CommonHelper::getsetting('smtp_mail_password');
            $mail->SetFrom(CommonHelper::getsetting('smtp_mail_send_from'),CommonHelper::getsetting('smtp_mail_send_from_name'));
            $mail->Subject      = $subject;
            $mail->Body         = $body;
            
            foreach (explode(',', $to) as $key => $value) {
                $mail->AddAddress($value);
            }

            if($file && isset($file)) {
                $mail->addStringAttachment(file_get_contents($file['url']), $file['name']);
            }
            if ($mail->Send()) {
                return true;
            } else {
                return false;
            }
        }catch(Exception $e){
            $error = new ReportErrorLogModel;
            $error->type = 'PMailer';
            $error->subtype = 'Not send';
            $error->description = $e->getMessage();
            $error->save();
        }
    } 
}