<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BasePaginationDtoOfDiscountCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BasePaginationDtoOfDiscountCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
            'totalCount' => $this->faker->numberBetween(1, 100),
            'records' => [],
        ];
    }

    protected function modelClass(): string
    {
        return BasePaginationDtoOfDiscountCodeDto::class;
    }
}
