<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInInventoryDto::class;
    }
}
