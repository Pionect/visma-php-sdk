<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WorkTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WorkTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'rutRotType' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'xmlTag' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WorkTypeDto::class;
    }
}
