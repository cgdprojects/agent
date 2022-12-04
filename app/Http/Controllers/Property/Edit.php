<?php

namespace App\Http\Controllers\Property;

use App\Property;
use Illuminate\Routing\Controller;
use App\Forms\Builders\Property as Form;

class Edit extends Controller
{
    public function __invoke(Property $property, Form $form)
    {
        return ['form' => $form->edit($property)];
    }
}
