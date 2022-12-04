<?php

namespace App\Http\Controllers\Property;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Property::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return Property::query();
    //}
}
