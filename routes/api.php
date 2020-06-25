<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'auth', 'core'])
    ->namespace('LaravelEnso\Departments\App\Http\Controllers')
    ->prefix('api/administration/departments')
    ->as('administration.departments.')
    ->group(function () {
        Route::get('create', 'Create')->name('create');
        Route::post('', 'Store')->name('store');
        Route::get('{department}/edit', 'Edit')->name('edit');

        Route::patch('{department}', 'Update')->name('update');

        Route::delete('{department}', 'Destroy')->name('destroy');

        Route::get('initTable', 'InitTable')->name('initTable');
        Route::get('tableData', 'TableData')->name('tableData');

        Route::get('options', 'Options')->name('options');
    });
