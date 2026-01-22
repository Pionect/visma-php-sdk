<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RateTableInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RateTableInTaskExtendedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return RateTableInTaskExtendedDto::class;
    }
}
