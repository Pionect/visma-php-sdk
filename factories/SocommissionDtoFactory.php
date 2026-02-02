<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SocommissionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SocommissionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'salesPersonId' => $this->faker->uuid(),
            'commissionPercent' => null,
            'commissionAmount' => null,
            'commissionableAmount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SocommissionDto::class;
    }
}
