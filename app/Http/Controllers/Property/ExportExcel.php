<?php

namespace App\Http\Controllers\Property;

use App\Tables\Builders\Property;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = Property::class;
}
