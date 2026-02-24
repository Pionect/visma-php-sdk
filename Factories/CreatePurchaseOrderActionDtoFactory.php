<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreatePurchaseOrderActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CreatePurchaseOrderActionDto>
 */
class CreatePurchaseOrderActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'preferSupplierFromSoline' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CreatePurchaseOrderActionDto::class;
    }
}
