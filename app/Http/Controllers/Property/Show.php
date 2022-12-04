<?php

namespace App\Http\Controllers\Property;

use App\Property;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Property $property)
    {
        return ['property' => $property];
    }
}
