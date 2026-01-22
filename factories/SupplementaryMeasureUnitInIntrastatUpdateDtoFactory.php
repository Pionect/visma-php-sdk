<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplementaryMeasureUnitInIntrastatUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplementaryMeasureUnitInIntrastatUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplementaryMeasureUnitInIntrastatUpdateDto::class;
    }
}
