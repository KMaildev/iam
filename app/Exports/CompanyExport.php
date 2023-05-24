<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CompanyExport implements FromView
{

    public function __construct($companies)
    {
        $this->companies = $companies;
    }

    public function view(): View
    {
        return view('admin.company.excel_export', [
            'companies' => $this->companies,
        ]);
    }
}
