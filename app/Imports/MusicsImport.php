<?php

namespace App\Imports;

use App\Models\Music;
use Maatwebsite\Excel\Concerns\ToModel;

class MusicsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Music([
            'songname'       => $row['0'],
            'artist'         => $row['1'],
            'gender'         => $row['2'],
            'yearlaunch'     => $row['3'],
            'album'          => $row['4'],
            'socialmedia'    => $row['5'],
            'timelistening'  => $row['6'],
            'letter'         => $row['7'],
            'comment'        => $row['8'],
        ]);
    }
}
