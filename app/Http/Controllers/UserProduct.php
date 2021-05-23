<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myproduct;
use Session;

class UserProduct extends Controller
{
    //
    function Pro_Data(Request $req){

        // return "This is Product Data";
        $My_Pro = new myproduct();
            $My_Pro->name = $req->input("Prd_name");
            $My_Pro->disc = $req->input("Prd_Disc");
            $My_Pro->brand = $req->input("Prd_brand");
            $My_Pro->total_price = $req->input("Prd_TPrice");
            // $My_Pro->photo = $req->input("Prd_file");
            
            if($req->hasfile("Prd_file")){
                
                $My_Files = $req->file("Prd_file");
                $Extention = $My_Files-> getClientOriginalExtension();
                $Files_Name = time() . ".". $Extention;

                $My_Files->move("Upload/DBProduct/",$Files_Name);

                $My_Pro->photo = $Files_Name;
            }else{
                // return $req;
                return "This is an Error";  
                $My_Pro->photo = "";
            }

        $My_Pro->save();
        return redirect("/");   
    }

    function Pro_See(){

        $My_DB = myproduct::all();
        //return view("Main", ["MyPro" => $My_Pros]);
        //return $My_DBPros;

        // $req->Session()->put("DBProduct", $My_DBPros);
        // return redirect("/");
        // return view("/", ["My_DBPros" => $My_DBPros]);
        return view("product", ["Data" => $My_DB]);
    }

    function Pro_Del($id){
        $Dels = myproduct::find($id);
        $Dels->delete();
        return redirect("MyProduct");
    }

    function Pro_UpSel($id){
        $Up_Sel = myproduct::find($id);
        return view("update", ["UpSels"=>$Up_Sel]);
    }

    function Pro_Update(Request $req){

        //return $req;
        $Update =  myproduct::find($req->UpPrId);
        //return $Update;

        $Update->name = $req->input("UpPrname");
        $Update->disc = $req->input("UpPrDisc");
        $Update->brand = $req->input("UpPrbrand");
        $Update->total_price = $req->input("UpPrTPrice");
        
        // $Update->photo = $req->input("UpPrfile");

        if($req->hasfile("UpPrfile")){

            $UpFile = $req->file("UpPrfile");
            $UpExtention = $UpFile->getClientOriginalExtension();
            $UpFile_Name = time() . "." .$UpExtention;

            $UpFile->move("Upload/DBProduct" ,$UpFile_Name); 
            $Update->photo = $UpFile_Name;

        }else{
            $Update->photo = "";
            return $req;
        }

        $Update->save();
        return redirect("/MyProduct");
        
    }

}
