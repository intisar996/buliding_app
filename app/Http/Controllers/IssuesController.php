<?php

namespace App\Http\Controllers;
use App\Mail\isuuesrequestsubmitted;
use App\Imports\isussImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Issu;
use Auth;
use App\User;




use Illuminate\Http\Request;

class IssuesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['test']);
    }

     public function list()
    {

     $data['users'] = User::all();
     
      return view('issues\list', $data);


    }




   public function store(Request $request)
   
    {
      

            //return $request;
       $issu = new Issu();
       $issu->name = $request->name;
       $issu->email = $request->email;
       $issu->phone = $request->phone;
       $issu->msg = $request->msg;
       $issu->building_number = $request->building_number;
       $issu->appartment_number = $request->appartment_number;
       $issu->user_id = Auth::user()->id;
       $issu->attachment =null;

        $issu->save();

        
        \Mail::to($issu->email)->send(new isuuesrequestsubmitted($issu));


      return "This record save";
    }


    public function test(){

     return "this is test";

    }

    public function importFromExcel(Request $request)
    {

      

      Excel::import(new isussImport,  $request->excelfile );

      return "datd imported successfuly";


    }



       
      
        




    
          






    


}
