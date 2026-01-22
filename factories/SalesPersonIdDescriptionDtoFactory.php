<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonIdDescriptionDto::class;
    }
}
