<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Crypt;
use App\Models\myuser;

class SebUser extends Controller
{
    //
    function Sub_Data(Request $req){
//        return $req;

        $MyUser = new myuser();
            
            $MyUser->name = $req->input("Sub_User");
            $MyUser->email = $req->input("Sub_Email");
            $MyUser->phone = $req->input("Sub_Phone");
            $MyUser->password = Crypt::encrypt($req->input("Sub_Pass"));

            // User Dharma Password = "dharmaa";
        $MyUser->save();
        return redirect("/MySubmit");
    }
}
