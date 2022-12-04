<?php

use App\Http\Controllers\Property\Create;
use App\Http\Controllers\Property\Destroy;
use App\Http\Controllers\Property\Edit;
use App\Http\Controllers\Property\ExportExcel;
use App\Http\Controllers\Property\Index;
use App\Http\Controllers\Property\InitTable;
use App\Http\Controllers\Property\Options;
use App\Http\Controllers\Property\Show;
use App\Http\Controllers\Property\Store;
use App\Http\Controllers\Property\TableData;
use App\Http\Controllers\Property\Update;
use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('property')
    ->as('property.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
		Route::get('create', Create::class)->name('create');
		Route::post('', Store::class)->name('store');
		Route::get('{property}/edit', Edit::class)->name('edit');
		Route::patch('{property}', Update::class)->name('update');
		Route::delete('{property}', Destroy::class)->name('destroy');
		Route::get('initTable', InitTable::class)->name('initTable');
		Route::get('tableData', TableData::class)->name('tableData');
		Route::get('exportExcel', ExportExcel::class)->name('exportExcel');
		Route::get('options', Options::class)->name('options');
		Route::get('{property}', Show::class)->name('show');
    });
