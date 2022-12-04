<?php

namespace App\Http\Controllers\Property;

use App\Property;
use Illuminate\Routing\Controller;
use App\Http\Requests\ValidateProperty;

class Update extends Controller
{
    public function __invoke(ValidateProperty $request, Property $property)
    {
        $property->update($request->validated());

        return ['message' => __('The property was successfully updated')];
    }
}
