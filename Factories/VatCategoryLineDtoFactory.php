<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCategoryLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCategoryLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatId' => $this->faker->uuid(),
            'vendorCd' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'type' => $this->faker->word(),
            'calculateOn' => $this->faker->word(),
            'cashDiscount' => $this->faker->word(),
            'vatRates' => [],
        ];
    }

    protected function modelClass(): string
    {
        return VatCategoryLineDto::class;
    }
}
