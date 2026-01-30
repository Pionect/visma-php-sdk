<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LandedCostDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'landedCostCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'purchaseInvoiceNbr' => $this->faker->word(),
            'supplier' => null,
            'location' => null,
            'apBillDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'currency' => $this->faker->word(),
            'amount' => null,
            'taxCategory' => null,
            'terms' => null,
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'apDocType' => $this->faker->word(),
            'apRefNbr' => $this->faker->word(),
            'inDocType' => $this->faker->word(),
            'inRefNbr' => $this->faker->word(),
            'postponePurchaseInvoiceCreation' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostDto::class;
    }
}
