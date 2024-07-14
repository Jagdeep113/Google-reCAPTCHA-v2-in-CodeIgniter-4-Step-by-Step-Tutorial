<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       
        return view('welcome_message');
    }
    public function formTest(){
        
           // print_r($this->request->getPost());exit;
           $response= $this->request->getPost('g-recaptcha-response');
           $remoteIp= $this->request->getIPAddress();
           if(!verifyCaptcha($remoteIp, $response)){
            return redirect()->back()->with('error', 'Captcha is not valid');
           }
           echo "form submitted succesfully";exit;

        
    }
}
