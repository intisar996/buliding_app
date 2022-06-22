<?php

namespace App\Imports;

 
use Maatwebsite\Excel\Concerns\ToModel;
use Auth;
use App\Issu;
class isussImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Issu([

         'name' => $row[0],
         'email' => $row[1],
         'phone' => $row[2],
         'msg' => $row[3],
         'building_number' => $row[4],
         'appartment_number' => $row[5],
         'user_id' => Auth::user()->id,


            
        ]);
    }
}
