<?php

namespace App\Http\Controllers\Property;

use Illuminate\Routing\Controller;
use App\Forms\Builders\Property;

class Create extends Controller
{
    public function __invoke(Property $form)
    {
        return ['form' => $form->create()];
    }
}
