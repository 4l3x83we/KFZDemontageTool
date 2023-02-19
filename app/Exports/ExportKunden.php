<?php

namespace App\Exports;

use App\Models\Backend\Fahrzeugdaten;
use App\Models\Backend\Kunden;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportKunden implements FromCollection, WithHeadings
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
        return Kunden::all();
    }

    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
