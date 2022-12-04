<?php

namespace App\Http\Controllers\Property;

use App\Tables\Builders\Property;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = Property::class;
}
