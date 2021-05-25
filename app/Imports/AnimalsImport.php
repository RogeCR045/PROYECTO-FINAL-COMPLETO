<?php

namespace App\Imports;

use App\models\Animal;
use Maatwebsite\Excel\Concerns\ToModel;

class AnimalsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Animal([
            'animal'       => $row['0'],
            'age'          => $row['1'],
            'birthplace'   => $row['2'],
            'climate'      => $row['3'],
            'color'        => $row['4'],
            'fur'          => $row['5'],
            'food'         => $row['6'],
            'comemmtanim'  => $row['7'],
        ]);
    }
}
