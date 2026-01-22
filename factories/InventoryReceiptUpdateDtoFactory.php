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
            'controlCost' => $this->faker->word(),
            'receiptLines' => [],
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'controlQuantity' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptUpdateDto::class;
    }
}
