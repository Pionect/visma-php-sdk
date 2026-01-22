<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReasonCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReasonCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReasonCodeDto::class;
    }
}
