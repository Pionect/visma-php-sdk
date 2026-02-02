<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CancelSalesOrderActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CancelSalesOrderActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CancelSalesOrderActionDto::class;
    }
}
