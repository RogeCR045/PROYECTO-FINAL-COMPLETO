<?php

namespace App\Exports;

use App\Models\Profession;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProfessionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Profession::all();
    }
}
