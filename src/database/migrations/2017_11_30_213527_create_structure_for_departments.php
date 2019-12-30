<?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\App\Enums\Types;

class CreateStructureForDepartments extends Migration
{
    protected $permissions = [
        ['name' => 'administration.departments.index', 'description' => 'Show index for departments', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.departments.create', 'description' => 'Create department', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.departments.store', 'description' => 'Store a new department', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.departments.show', 'description' => 'Show department', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.departments.edit', 'description' => 'Edit department', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.departments.update', 'description' => 'Update department', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.departments.destroy', 'description' => 'Delete department', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.departments.initTable', 'description' => 'Init table for departments', 'type' => Types::Read, 'is_default' => false],

        ['name' => 'administration.departments.tableData', 'description' => 'Get table data for departments', 'type' => Types::Read, 'is_default' => false],

        ['name' => 'administration.departments.exportExcel', 'description' => 'Export excel for departments', 'type' => Types::Read, 'is_default' => false],

        ['name' => 'administration.departments.options', 'description' => 'Get department options for select', 'type' => Types::Read, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Departments', 'icon' => 'project-diagram', 'route' => 'administration.departments.index', 'order_index' => 350, 'has_children' => false
    ];

    protected $parentMenu = 'Administration';
}
