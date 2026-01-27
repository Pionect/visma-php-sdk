<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'landedCostCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'purchaseInvoiceNbr' => $this->faker->word(),
            'supplierId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'apBillDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'currency' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'taxCategory' => $this->faker->word(),
            'terms' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'apDocType' => $this->faker->word(),
            'apRefNbr' => $this->faker->word(),
            'inDocType' => $this->faker->word(),
            'inRefNbr' => $this->faker->word(),
            'postponePurchaseInvoiceCreation' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostUpdateDto::class;
    }
}
