<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForDepartments extends Migration
{
    protected array $permissions = [
        ['name' => 'administration.departments.index', 'description' => 'Show index for departments', 'is_default' => false],
        ['name' => 'administration.departments.create', 'description' => 'Create department', 'is_default' => false],
        ['name' => 'administration.departments.store', 'description' => 'Store a new department', 'is_default' => false],
        ['name' => 'administration.departments.show', 'description' => 'Show department', 'is_default' => false],
        ['name' => 'administration.departments.edit', 'description' => 'Edit department', 'is_default' => false],
        ['name' => 'administration.departments.update', 'description' => 'Update department', 'is_default' => false],
        ['name' => 'administration.departments.destroy', 'description' => 'Delete department', 'is_default' => false],
        ['name' => 'administration.departments.initTable', 'description' => 'Init table for departments', 'is_default' => false],

        ['name' => 'administration.departments.tableData', 'description' => 'Get table data for departments', 'is_default' => false],

        ['name' => 'administration.departments.exportExcel', 'description' => 'Export excel for departments', 'is_default' => false],

        ['name' => 'administration.departments.options', 'description' => 'Get department options for select', 'is_default' => false],
    ];

    protected array $menu = [
        'name' => 'Departments', 'icon' => 'chart-network', 'route' => 'administration.departments.index', 'order_index' => 350, 'has_children' => false,
    ];

    protected string $parentMenu = 'Administration';
}
