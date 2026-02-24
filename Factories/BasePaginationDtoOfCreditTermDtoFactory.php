<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BasePaginationDtoOfCreditTermDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BasePaginationDtoOfCreditTermDto>
 */
class BasePaginationDtoOfCreditTermDtoFactory extends Factory
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
        return BasePaginationDtoOfCreditTermDto::class;
    }
}
