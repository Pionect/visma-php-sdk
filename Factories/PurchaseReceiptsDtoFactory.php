<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptsDto;
use Pionect\VismaSdk\Enums\PurchaseReceiptsStatusEnum;
use Pionect\VismaSdk\Enums\PurchaseReceiptsTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(PurchaseReceiptsTypeEnum::cases()),
            'receiptNumber' => $this->faker->word(),
            'status' => $this->faker->randomElement(PurchaseReceiptsStatusEnum::cases()),
            'supplierName' => $this->faker->company(),
            'currency' => $this->faker->word(),
            'totalQty' => null,
            'totalAmt' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptsDto::class;
    }
}
