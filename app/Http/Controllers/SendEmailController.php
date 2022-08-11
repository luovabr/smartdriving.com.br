<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Redirect;
class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'nome'=>'required',
            'email'=>'required',
            'telefone'=>'required',
            'mensagem'=>'required'
        ]);
        Mail::send(new SendMail($request,'C'));
        Mail::send(new SendMail($request,'S'));
        if (Mail::failures()){
            return Redirect::to('contato')->with('errors','Mensagem não pode ser enviada');
        }
        return Redirect::to('contato')->with('success', 'Mensagem enviada com sucesso!');;
        
        //return new SendMail($request);
    }
}
