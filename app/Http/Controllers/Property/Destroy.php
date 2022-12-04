<?php

namespace App\Http\Controllers\Property;

use App\Property;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Property $property)
    {
        $property->delete();

        return [
            'message' => __('The property was successfully deleted'),
            'redirect' => 'property.index',
        ];
    }
}
