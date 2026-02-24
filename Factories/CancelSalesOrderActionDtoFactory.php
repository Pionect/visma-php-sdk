<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CancelSalesOrderActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CancelSalesOrderActionDto>
 */
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
