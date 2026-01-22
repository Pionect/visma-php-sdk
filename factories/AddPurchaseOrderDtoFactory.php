<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AddPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'poOrderNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AddPurchaseOrderDto::class;
    }
}
