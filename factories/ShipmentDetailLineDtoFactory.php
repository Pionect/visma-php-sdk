<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ShipmentDetailLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentDetailLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'orderType' => $this->faker->word(),
            'orderNbr' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'freeItem' => $this->faker->boolean(),
            'warehouse' => null,
            'location' => null,
            'uom' => $this->faker->word(),
            'shippedQty' => null,
            'orderedQty' => null,
            'openQty' => null,
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'allocations' => [],
            'orderLineNbr' => $this->faker->numberBetween(1, 100),
            'note' => $this->faker->word(),
            'externalLink' => $this->faker->word(),
            'alternateId' => $this->faker->uuid(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentDetailLineDto::class;
    }
}
