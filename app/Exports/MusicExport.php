<?php

namespace App\Exports;

use App\Models\Music;
use Maatwebsite\Excel\Concerns\FromCollection;

class MusicExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Music::all();
    }
}
