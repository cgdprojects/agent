<?php

namespace App\Forms\Builders;

use App\Property as Model;
use LaravelEnso\Forms\Services\Form;

class Property
{
    private const TemplatePath = __DIR__.'/../Templates/property.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form($this->templatePath());
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $property)
    {
        return $this->form->edit($property);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
