<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultReceiptToDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultReceiptToDtoFactory extends Factory
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
        return DefaultReceiptToDto::class;
    }
}
