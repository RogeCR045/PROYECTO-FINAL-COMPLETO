<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contact([
            'fullname'     => $row['0'],
            'years'        => $row['1'],
            'mailaddress'  => $row['2'],
            'password'     => $row['3'],
            'Street'       => $row['4'],
            'location'     => $row['5'],
            'city'         => $row['6'],
            'condition'    => $row['7'],
            'website'      => $row['8'],
        ]);
    }
}
