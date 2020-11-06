<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\Departments\Http\Controllers\Create;
use LaravelEnso\Departments\Http\Controllers\Destroy;
use LaravelEnso\Departments\Http\Controllers\Edit;
use LaravelEnso\Departments\Http\Controllers\InitTable;
use LaravelEnso\Departments\Http\Controllers\Options;
use LaravelEnso\Departments\Http\Controllers\Store;
use LaravelEnso\Departments\Http\Controllers\TableData;
use LaravelEnso\Departments\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/departments')
    ->as('administration.departments.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{department}/edit', Edit::class)->name('edit');

        Route::patch('{department}', Update::class)->name('update');

        Route::delete('{department}', Destroy::class)->name('destroy');

        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');

        Route::get('options', Options::class)->name('options');
    });
