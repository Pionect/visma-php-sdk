<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BasePaginationDtoOfSalesPersonDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BasePaginationDtoOfSalesPersonDtoFactory extends Factory
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
        return BasePaginationDtoOfSalesPersonDto::class;
    }
}
