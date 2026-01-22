<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TermsInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TermsInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TermsInSalesOrderDto::class;
    }
}
