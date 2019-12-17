<?php

use LaravelEnso\Migrator\app\Database\Migration;

class CreateStructureForDepartments extends Migration
{
    protected $permissions = [
        ['name' => 'administration.departments.index', 'description' => 'Show index for departments', 'type' => 0, 'is_default' => false],
        ['name' => 'administration.departments.create', 'description' => 'Create department', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.departments.store', 'description' => 'Store a new department', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.departments.show', 'description' => 'Show department', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.departments.edit', 'description' => 'Edit department', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.departments.update', 'description' => 'Update department', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.departments.destroy', 'description' => 'Delete department', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.departments.initTable', 'description' => 'Init table for departments', 'type' => 0, 'is_default' => false],

        ['name' => 'administration.departments.tableData', 'description' => 'Get table data for departments', 'type' => 0, 'is_default' => false],

        ['name' => 'administration.departments.exportExcel', 'description' => 'Export excel for departments', 'type' => 0, 'is_default' => false],

        ['name' => 'administration.departments.options', 'description' => 'Get department options for select', 'type' => 0, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Departments', 'icon' => 'building', 'route' => 'administration.departments.index', 'order_index' => 0, 'has_children' => false
    ];

    protected $parentMenu = 'Administration';
}
