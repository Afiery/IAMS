<?php

namespace App\Exports;

use App\Models\Finding;
use Maatwebsite\Excel\Concerns\FromCollection;

class FindingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Finding::all();
    }
}
