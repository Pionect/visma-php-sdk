<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashAccountIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashAccountIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CashAccountIdDescriptionDto::class;
    }
}
