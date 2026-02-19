<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierDetailsDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'active' => $this->faker->boolean(),
            'default' => $this->faker->boolean(),
            'supplierId' => $this->faker->uuid(),
            'location' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'supplierItemId' => $this->faker->uuid(),
            'override' => $this->faker->boolean(),
            'shipmentLeadTime' => $this->faker->numberBetween(1, 100),
            'minOrderFreq' => $this->faker->numberBetween(1, 100),
            'minOrderQty' => null,
            'maxOrderQty' => null,
            'lotSize' => null,
            'eoq' => null,
            'currencyId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDetailsDto::class;
    }
}
