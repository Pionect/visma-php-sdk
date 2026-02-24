<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TermsInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TermsInSalesOrderDto>
 */
class TermsInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TermsInSalesOrderDto::class;
    }
}
