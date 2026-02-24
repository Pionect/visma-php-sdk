<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BasePaginationDtoOfDiscountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BasePaginationDtoOfDiscountDto>
 */
class BasePaginationDtoOfDiscountDtoFactory extends Factory
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
        return BasePaginationDtoOfDiscountDto::class;
    }
}
