<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myuser;
use Session;
use Crypt;

class LogUser extends Controller
{
    //
    function Log_Data(Request $req){
        //return $req;

        $MY_Log = myuser::where(["email"=>$req->input("Log_Email")])->first();
        // return $MY_Log;

        $My_LogPass = $req->input("Log_Pass");
        $DB_LogPass = Crypt::decrypt($MY_Log->password);
        // return $DB_LogPass;
        if($My_LogPass != $DB_LogPass){

        }else{
            
            $req->Session()->put("UserData", $MY_Log->name);
            return redirect("/");
        }
    }
}
