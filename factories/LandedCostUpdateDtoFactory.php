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
            'lineNbr' => $this->faker->word(),
            'landedCostCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'purchaseInvoiceNbr' => $this->faker->word(),
            'supplierId' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'apBillDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'currency' => $this->faker->word(),
            'amount' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'terms' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'apDocType' => $this->faker->word(),
            'apRefNbr' => $this->faker->word(),
            'inDocType' => $this->faker->word(),
            'inRefNbr' => $this->faker->word(),
            'postponePurchaseInvoiceCreation' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostUpdateDto::class;
    }
}
