<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'receiptNumber' => $this->faker->word(),
            'status' => $this->faker->word(),
            'supplierName' => $this->faker->company(),
            'currency' => $this->faker->word(),
            'totalQty' => $this->faker->randomFloat(2, 0, 1000),
            'totalAmt' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptsDto::class;
    }
}
