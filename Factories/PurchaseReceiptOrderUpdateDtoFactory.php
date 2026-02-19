<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptOrderUpdateDto;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderNbr' => $this->faker->word(),
            'orderType' => $this->faker->randomElement(PurchaseOrderLineOrderTypeEnum::cases()),
            'allocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptOrderUpdateDto::class;
    }
}
