<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForProperties extends Migration
{
    protected array $permissions = [
        ['name' => 'property.index', 'description' => 'Show index for properties', 'is_default' => false],

        ['name' => 'property.create', 'description' => 'Create property', 'is_default' => false],
        ['name' => 'property.store', 'description' => 'Store a new property', 'is_default' => false],
        ['name' => 'property.show', 'description' => 'Show property', 'is_default' => false],
        ['name' => 'property.edit', 'description' => 'Edit property', 'is_default' => false],
        ['name' => 'property.update', 'description' => 'Update property', 'is_default' => false],
        ['name' => 'property.destroy', 'description' => 'Delete property', 'is_default' => false],
        ['name' => 'property.initTable', 'description' => 'Init table for properties', 'is_default' => false],

        ['name' => 'property.tableData', 'description' => 'Get table data for properties', 'is_default' => false],

        ['name' => 'property.exportExcel', 'description' => 'Export excel for properties', 'is_default' => false],

        ['name' => 'property.options', 'description' => 'Get property options for select', 'is_default' => false],
    ];

    protected array $menu = [
        'name' => 'Properties', 'icon' => 'fa-book', 'route' => 'property.properties', 'order_index' => 999, 'has_children' => false
    ];

    protected ?string $parentMenu = '';
}

