<?php

namespace App\Exports;

use App\DataMember;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataMemberExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMember::all();
    }
}
