<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AddPurchaseOrderDto>
 */
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
