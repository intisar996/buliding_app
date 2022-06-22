<?php

namespace App\Imports;

use App\issus;
use Maatwebsite\Excel\Concerns\ToModel;

class isussImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new issus([
            //
        ]);
    }
}
