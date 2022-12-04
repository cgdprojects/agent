<?php

namespace App\Http\Controllers\Property;

use App\Property;
use Illuminate\Routing\Controller;
use App\Http\Requests\ValidateProperty;

class Store extends Controller
{
    public function __invoke(ValidateProperty $request, Property $property)
    {
        $property->fill($request->validated())->save();

        return [
            'message' => __('The property was successfully created'),
            'redirect' => 'property.edit',
            'param' => ['property' => $property->id],
        ];
    }
}
