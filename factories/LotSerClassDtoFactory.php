<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerClassDto::class;
    }
}
