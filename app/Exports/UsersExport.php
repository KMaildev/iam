<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function view(): View
    {
        return view('admin.student.excel_export', [
            'users' => $this->users,
        ]);
    }
}
