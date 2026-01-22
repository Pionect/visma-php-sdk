<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfSalesOrderContactUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfSalesOrderContactUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfSalesOrderContactUpdateDto::class;
    }
}
