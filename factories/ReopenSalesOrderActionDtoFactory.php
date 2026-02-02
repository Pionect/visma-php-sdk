<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReopenSalesOrderActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReopenSalesOrderActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'saleOrderUpdateDto' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ReopenSalesOrderActionDto::class;
    }
}
