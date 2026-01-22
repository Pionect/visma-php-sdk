<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountCodeNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountCodeNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountCodeNumberDescriptionDto::class;
    }
}
