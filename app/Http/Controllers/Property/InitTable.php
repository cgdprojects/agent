<?php

namespace App\Http\Controllers\Property;

use App\Tables\Builders\Property;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected string $tableClass = Property::class;
}
