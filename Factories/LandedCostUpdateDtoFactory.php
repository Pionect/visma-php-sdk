<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LandedCostUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\LandedCostApDocTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'landedCostCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'purchaseInvoiceNbr' => $this->faker->word(),
            'supplierId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'apBillDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'currency' => $this->faker->word(),
            'amount' => null,
            'taxCategory' => $this->faker->word(),
            'terms' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'apDocType' => $this->faker->randomElement(LandedCostApDocTypeEnum::cases()),
            'apRefNbr' => $this->faker->word(),
            'inDocType' => $this->faker->randomElement(CashSaleDocumentTypeEnum::cases()),
            'inRefNbr' => $this->faker->word(),
            'postponePurchaseInvoiceCreation' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostUpdateDto::class;
    }
}
