<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SigmaIntrastatTransactionDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SigmaIntrastatTransactionDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SigmaIntrastatTransactionDescriptionDto::class;
    }
}
