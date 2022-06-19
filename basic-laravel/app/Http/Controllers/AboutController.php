<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $address = "123 กรุงเทพ ประเทศไทย";
        $tel = "096-919-1100";
        $email = "surat@acctwork.com";

        // return view('about',['address'=>$address,'tel'=>$tel,'email'=>$email]);
        // return view('about',compact('address','tel','email'));
        
        return view('about')
            ->with('address',$address)
            ->with('tel',$tel)
            ->with('email',$email)
            ->with('error','404 Not Found -- ');
    }
}
