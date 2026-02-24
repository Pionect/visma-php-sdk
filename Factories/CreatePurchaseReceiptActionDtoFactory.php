<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreatePurchaseReceiptActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CreatePurchaseReceiptActionDto>
 */
class CreatePurchaseReceiptActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreatePurchaseReceiptActionDto::class;
    }
}
