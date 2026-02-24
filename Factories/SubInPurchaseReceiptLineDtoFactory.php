<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SubInPurchaseReceiptLineDto>
 */
class SubInPurchaseReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SubInPurchaseReceiptLineDto::class;
    }
}
