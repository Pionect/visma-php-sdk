<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IntrastatUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IntrastatUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'cN8' => null,
            'countryOfOrigin' => null,
            'supplementaryMeasureUnit' => null,
        ];
    }

    protected function modelClass(): string
    {
        return IntrastatUpdateDto::class;
    }
}
