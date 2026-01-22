<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReplenishmentClassIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReplenishmentClassIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReplenishmentClassIdDescriptionDto::class;
    }
}
