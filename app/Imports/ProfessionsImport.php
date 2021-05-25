<?php

namespace App\Imports;

use App\Models\Profession;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfessionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Profession([
            'name'          => $row['0'],
            'ageyears'      => $row['1'],
            'profession'    => $row['2'],
            'phonenumber'   => $row['3'],
            'yearsworking'  => $row['4'],
            'inherited'     => $row['5'],
            'description'   => $row['6'],
            'commentcarr'   => $row['7'],
        ]);
    }
}
