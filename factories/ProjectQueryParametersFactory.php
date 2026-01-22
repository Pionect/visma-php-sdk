<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return ProjectQueryParameters::class;
    }
}
