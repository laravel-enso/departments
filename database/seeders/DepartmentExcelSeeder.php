<?php

namespace LaravelEnso\Departments\Database\Seeders;

use LaravelEnso\DataImport\Services\ExcelSeeder;

class DepartmentExcelSeeder extends ExcelSeeder
{
    protected string $type = 'departments';
    protected string $filename = 'departments.xlsx';
}
