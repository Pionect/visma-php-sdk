<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'skipDiscount' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'sequanceId' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountDetailUpdateDto::class;
    }
}
