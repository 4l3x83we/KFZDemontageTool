<?php

namespace App\Exports;

use App\Models\Backend\Fahrzeugdaten;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportFahrzeuge implements FromCollection, WithHeadings
{
    use Exportable;

    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fahrzeugdaten::all();
    }

    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
