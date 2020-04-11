<?php

use Illuminate\Support\Facades\Auth;
use LaravelEnso\DataImport\App\Services\ExcelSeeder;

class DepartmentExcelSeeder extends ExcelSeeder
{
    protected string $type = 'departments';
    protected string $filename = 'departments.xlsx';

    public function run()
    {
        Auth::loginUsingId(1);

        parent::run();
    }
}
