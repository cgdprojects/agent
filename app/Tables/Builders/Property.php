<?php

namespace App\Tables\Builders;

use App\Property as Model;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\Contracts\Table;

class Property implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/properties.json';

    public function query(): Builder
    {
        return Model::selectRaw('
            properties.id
        ');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
