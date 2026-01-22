<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CancelSalesOrderActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CancelSalesOrderActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CancelSalesOrderActionResultDto::class;
    }
}
