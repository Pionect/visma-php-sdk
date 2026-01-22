<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInCashSaleUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInCashSaleUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInCashSaleUpdateDto::class;
    }
}
