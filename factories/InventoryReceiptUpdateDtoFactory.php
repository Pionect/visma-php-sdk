<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'transferNumber' => $this->faker->word(),
            'controlCost' => null,
            'receiptLines' => [],
            'referenceNumber' => $this->faker->word(),
            'hold' => null,
            'date' => null,
            'postPeriod' => null,
            'externalReference' => null,
            'description' => $this->faker->sentence(),
            'controlQuantity' => null,
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptUpdateDto::class;
    }
}
