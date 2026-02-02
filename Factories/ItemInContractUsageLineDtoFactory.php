<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemInContractUsageLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemInContractUsageLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ItemInContractUsageLineDto::class;
    }
}
