<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\RegisterMail;
use App\Mail\BookMail;
use App\Mail\ResponseMail;
use App\Models\Comment;
use App\Models\GlobalSetting;
use Mail;

class ContactController extends Controller
{

    public function send(Request $request)
    {
        $data = $request->all();
        $mail = GlobalSetting::first();
        $token = $request->input('g-recaptcha-response');
        if(is_null($token)){
            //dd($token);
            return redirect('/contact-us')->with('error',"Recaptcha not checked. Submit With recaptcha again !!");
        }else{
        $email = $mail->site_email;
        $asd = "production@radiantnepal.com";
        $user_email = $request->input('email');
        
        $subject = "Contact Message";
            $msg = '<table border="1" style="background: #f1f1f1; color: #1b1b1b;">';
            $msg .= '<tr><td colspan="2"><h3>Contact message by '.$data['name'].'</h3></td></tr>';
            $msg .= '<tr><th>Full Name</th><td>'.$data['name'].'</td></tr>';
            $msg .= '<tr><th>Email Address</th><td>'.$data['email'].'</td></tr>';
            $msg .= '<tr><th>Phone Number</th><td>'.$data['phone'].'</td></tr>';
            $msg .= '<tr><th>Subject</th><td>'.$data['subject'].'</td></tr>';
            $msg .= '<tr><th>Message</th><td>' . $data['comment'] . '</td></tr>';
            $msg .= '</table>';
            
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        mail($email,$subject,$msg,$headers);
        
        if($data){
            return redirect('/contact-us')->with('success',"Message sent Sucessfully. Thank You!!");
        }
        }
        // return redirect()->back()->with('error',"Feedback Message failed. Try Again Later");
    }

   
}
