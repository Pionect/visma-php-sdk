<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerVatzoneInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerVatzoneInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'defaultVatCategory' => $this->faker->word(),
            'defaultTaxCategory' => TaxCategoryNumberDescriptionDtoFactory::new()->make(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerVatzoneInSalesOrderDto::class;
    }
}
